<?php

namespace User\CommonBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisterType extends AbstractType
{
	public function __construct($router){
		$this->router = $router;
	}
	
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		
		//第一步：设置表单的基本属性,从控制器中中设置变成在这里设置
		$builder->setMethod('post');
		$builder->setAction($this->router->generate('web_user_register_check') );
		//$builder->setAttribute('class', 'form-horizontal');
		
		//第二步：添加表单的相关元素
		//1.添加电子邮箱
		$builder->add('email','text',array(	
											'attr'=>array(
															'class'=>'form-control',
															'placeholder'=>'请输入您的电子邮箱',
															'wx-validator-rule'=>'required|email'
														 ),
											'label'=>'电子邮箱',
											'label_attr'=>array('class'=>'col-md-3 control-label')
										 )
		
					);//add end
		
		//2.添加密码
		$builder->add('password','text',array(	
											'attr'=>array(
															'class'=>'form-control',
															'placeholder'=>'请输入密码',
															'wx-validator-rule'=>'required'
														 ),
											'label'=>'密码',
											'label_attr'=>array('class'=>'col-md-3 control-label')
										 )
		
					);//add end
		
		//3.添加确认密码
		$builder->add('confirm_password','text',array(	
											'attr'=>array(
															'class'=>'form-control',
															'placeholder'=>'请输入确认密码',
															'wx-validator-rule'=>'required'
														 ),
											'label'=>'确认密码',
											'label_attr'=>array('class'=>'col-md-3 control-label')
										 )
		
					);//add end
		
		//4.添加用户昵称
		$builder->add('nickname','text',array(	
											'attr'=>array(
															'class'=>'form-control',
															'placeholder'=>'请输入昵称',
															'wx-validator-rule'=>'required'
														 ),
											'label'=>'昵称',
											'label_attr'=>array('class'=>'col-md-3 control-label')
										 )
		
					);//add end
		
		//5.添加手机号码
		$builder->add('cellphone','text',array(	
											'attr'=>array(
															'class'=>'form-control',
															'placeholder'=>'请输入手机号',
															'wx-validator-rule'=>'required|mobile'
														 ),
											'label'=>'手机号',
											'label_attr'=>array('class'=>'col-md-3 control-label')
										 )
		
					);//add end
		
		//6.添加手机验证码
		$builder->add('capcha','text',array(	
											'attr'=>array(
															'class'=>'form-control',
															'placeholder'=>'请输入验证码',
															'wx-validator-rule'=>'required|email'
														 ),
				
											'label'=>'验证码',
											'label_attr'=>array('class'=>'col-md-3 control-label')
										 )
		
					);//add end
		
		
		
		
	}//function buildForm() end
	
	
	public function getName()
	{
		return 'user_register_form';
	}
	
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
				
			'data_class' => 'User\CommonBundle\Entity\User',
			'cascade_validation'=>true
		));
	}
	
	
	
	
	

}