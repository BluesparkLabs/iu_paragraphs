<?php

namespace Drupal\iu_paragraphs\Plugin\Condition;

use Drupal\Core\Condition\ConditionPluginBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides an 'Is Node' condition.
 *
 * Note that this condition does not work in node_preview and possibly in
 * node_revision contexts without the patch on core issue:
 * https://www.drupal.org/i/2890758
 *
 * @Condition(
 *   id = "is_node",
 *   label = @Translation("Is Node"),
 *   context = {
 *     "node" = @ContextDefinition("entity:node", label = @Translation("Node"))
 *   }
 * )
 */
class IsNode extends ConditionPluginBase implements ContainerFactoryPluginInterface {

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition
    );
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form['is_node'] = [
      '#title' => $this->t('Current request is a node page'),
      '#type' => 'checkbox',
      '#default_value' => $this->configuration['is_node'],
    ];
    return parent::buildConfigurationForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    $this->configuration['is_node'] = $form_state->getValue('is_node');
    parent::submitConfigurationForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return ['is_node' => ''] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function evaluate() {
    if (empty($this->configuration['is_node']) && !$this->isNegated()) {
      return TRUE;
    }
    $is_node = $this->getContextValue('node');
    return !empty($is_node);
  }

  /**
   * {@inheritdoc}
   */
  public function summary() {
    $is_node = $this->getContextValue('node');
    if ($is_node) {
      return t('The current request is a node.');
    }
    else {
      return t('The current request is not a node.');
    }
  }

}
