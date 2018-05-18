<?php

namespace Rose\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactForm extends Form {

  public function build() {

    $this->builder = $this->formFactory->createNamedBuilder('ContactForm');
    $builder = $this->builder;

    $builder->setAction('/contact');

    $builder->add('name', TextType::class, [
      'label' => 'Your name',
      'required' => TRUE,
      'attr' => ['class' => 'text-element pad-s text-sm mar-b-m'],
      'label_attr' => ['class' => 'block text-sm mar-b-xs']
    ]);

    $builder->add('subject', TextType::class, [
      'label' => 'Random Topic Generator',
      'required' => FALSE,
      'attr' => ['class' => 'text-element rtg-input pad-s text-sm', 'readonly' => 'true'],
      'label_attr' => ['class' => 'block letter-m font-dosis text-upper mar-r-s text-m mar-b-s color-white']
    ]);

    $builder->add('message', TextareaType::class, [
      'label' => 'Message',
      'required' => TRUE,
      'attr' => ['rows' => '5', 'class' => 'textarea-element block pad-s text-sm mar-b-xs'],
      'label_attr' => ['class' => 'block text-sm mar-b-xs']
    ]);

    $builder->add('submit', SubmitType::class, [
      'label' => 'Send message',
      'attr' => ['class' => 'bg-cherry font-dosis bor-none letter-l color-white pad-v-s pad-h-l mar-t-l text-sm text-upper'],
    ]);

    $this->form = $builder->getForm();
  }

  public function storeMessage() {

    $data = $this->form->getData();

    $name = $data['name'];
    $subject = $data['subject'];
    $message = $data['message'];

    /** @var \Doctrine\DBAL\Connection */
    $db = $this->db;

    // $this->db->insert

    $that = 'thhat';

    $db->executeQuery("INSERT INTO contact_submissions SET
      name = ?,
      subject = ?,
      message = ?
    ", [$name, $subject, $message]);
  }
}
