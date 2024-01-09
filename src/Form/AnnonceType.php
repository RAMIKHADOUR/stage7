<?php

namespace App\Form;

use App\Entity\Annonce;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre',TextType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'100'],
            'label'=>'Title',
            'constraints'=>[new Assert\NotBlank(),new Assert\Length(['min'=>2,'max'=>100])]])
  
            ->add('category',TextType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'100'],
            'label'=>'Categorie',
            'constraints'=>[new Assert\NotBlank(),new Assert\Length(['min'=>2,'max'=>100])]])

            ->add('type',TextType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'100'],
            'label'=>'Type',
            'constraints'=>[new Assert\NotBlank(),new Assert\Length(['min'=>2,'max'=>100])]])

            ->add('description',TextareaType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>500],
            'label'=>'Description',
            'constraints'=>[new Assert\NotBlank(),new Assert\Length(['min'=>2 ,'max'=>500])]])

            ->add('surface',NumberType::class,[
            'attr'=>['class'=>'form-control','greaterthan'=>'10'],
            'label'=>'Surface',
            'constraints'=>[new Assert\NotNull(),new Assert\GreaterThan(['10'])]])

            ->add('number_rooms',IntegerType::class,[
            'attr'=>['class'=>'form-control'],
            'label'=>'Chambres',
            'constraints'=>[new Assert\NotNull()]])

            ->add('number_bathrooms',IntegerType::class,[
            'attr'=>['class'=>'form-control'],
            'label'=>'Bathrooms',
            'constraints'=>[new Assert\NotNull()]])

            ->add('number_stages',IntegerType::class,[
            'attr'=>['class'=>'form-control'],
            'label'=>'Stages',
            'constraints'=>[new Assert\NotNull()]])

            ->add('numero_stage',IntegerType::class,[
            'attr'=>['class'=>'form-control'],
            'label'=>'N°Stage',
            'constraints'=>[new Assert\NotNull()]])

            ->add('number_parkings',IntegerType::class,[
            'attr'=>['class'=>'form-control'],
            'label'=>'Parkings',
            'constraints'=>[new Assert\NotNull()]])

            ->add('date_construire',DateTimeType::class,[
            'attr'=>['class'=>'form-control'],
            'label'=>'Date_Construire',
            'constraints'=>[new Assert\NotNull()]])

            ->add('price',NumberType::class,[
            'attr'=>['class'=>'form-control','greaterthan'=>'1'],
            'label'=>'Prix',
            'constraints'=>[new Assert\NotNull(),new Assert\GreaterThan(['1'])]])

            ->add('media',FileType::class,[
            'attr'=>['class'=>'form-control','minlength'=>'2','maxlength'=>'255'],
            'label'=>'Media',
            'constraints'=>[new Assert\NotBlank(),new Assert\Length(['min'=>2,'max'=>255])]])
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
