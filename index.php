<?php
  if(!empty($_POST["login"])&&!empty($_POST["password"]))
  {
     if($_POST["password"]==123)
     {
       $admin = new Admin('Вася','Васильев','администратор');
    
       echo $admin->infa();

     }
     if($_POST["password"]==124)
     {
       $client=new Client('Сергей','Сидоров','клиент');
    
        echo  User::us().$client->infa();

     }
     if($_POST["password"]==125)
     {
       $manager= new Manager('Анна','Березнова','менеджер');

       echo $manager->infa();

     }
     else{
      echo "Данные введены неверно!";
     }

  }
  else{
     echo "Поля не заполнены!!! ";
   }

  class User{
     private $name;
     private $surname;
     private $job;

     public function __construct($name,$surname,$job ){
	      $this->name = $name;
	      $this->surname = $surname;
	      $this->job=$job;
     }

     public  function us()
      {
        echo 'Здравствуйте  '.$this->name.' '.$this->surname.' вы '.$this->job.'. ';
      }

   }
  class Admin extends User{
     public   function infa()
      {
        parent::us();
        echo 'Вам разрешен доступ ко всем функциям сайта';
      }

      }
  class Client extends User{
     public  function infa()
      { 
        //parent::us();
        echo 'Вам разрешен только просмотр  сайта';
      }

   }
  class Manager extends User{
     public  function infa()
      { 
        parent::us();
        echo 'Вам разрешено удалять и добавлять клиентов ';
      }

  }


?>
