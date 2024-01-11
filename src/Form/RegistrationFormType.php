<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
             ->add('lastname', TextType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'50'],

            'label'=>'Nom',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new NotBlank(),new Assert\Length(['min'=>2,'max'=> 50])]])

        ->add('firstname',TextType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'50'],
            'label'=>'Prenom',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new Assert\NotBlank(),new Assert\Length(['min'=>2, 'max'=>50])]])

    ->add('telephone',TextType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'10'],
            'label'=>'Télephone',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new Assert\NotBlank(),new Assert\Length(['min' => 2, 'max' => 10])]])

            ->add('adresse',TextType::class,[
            'attr'=>['class'=>'form-control','minlength' =>'2','maxlength'=>'100'],
            'label'=>'Adresse',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new NotBlank(),new Assert\Length(['min'=>2,'max'=>100])]])

            ->add('city',TextType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'50'],
            'label'=>'Ville',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new NotBlank(),new Assert\Length(['min'=>2,'max'=>50])]])


            ->add('zipcode',TextType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'10'],
            'label'=>'Code-Postale',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new Assert\NotBlank(),new Assert\Length(['min'=>2,'max'=>10])]])
            
            ->add('email',EmailType::class, [
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'180'],
            'label'=>'Email',
            'label_attr'=>['class'=>'form-label'],
            'constraints'=>[new Assert\NotBlank(),new Assert\Email(),new Assert\Length(['min'=>2,'max'=>180])]])
            
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password','class'=>'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
