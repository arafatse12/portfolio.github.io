<?php
/**
 * Created by PhpStorm.
 * User: Sharmin1
 * Date: 11/10/2017
 * Time: 12:20 AM
 */
namespace App\admin\About;
use App\database\Connection;
use PDOException;
use PDO;
class About extends Connection
{
    public $name = '';
    public $age = '';
    public $phone = '';
    public $email = '';
    public $address = '';
    public $story = '';
    public $image = '';
    public $resume = '';
    public $facebook_url = '';
    public $twitter_url = '';
    public $linkedin_url = '';
    public $google_plus_url = '';
    public $pinterest_url = '';
    public $skype_url = '';
    public $contactName='';
    public $contactEmail='';
    public $contactSubject='';
    public $contactMessage='';
    public $conn;
    public function set($data = array()){
        if(array_key_exists('name',$data)){
            $this->name = $data['name'];
        }
        if(array_key_exists('age',$data)){
            $this->age = $data['age'];
        }
        if(array_key_exists('phone',$data)){
            $this->phone = $data['phone'];
        }
        if(array_key_exists('email',$data)){
            $this->email = $data['email'];
        }
        if(array_key_exists('address',$data)){
            $this->address = $data['address'];
        }
        if(array_key_exists('story',$data)){
            $this->story = $data['story'];
        } if(array_key_exists('image',$data)){
            $this->image = $data['image'];
        }
        if(array_key_exists('resume',$data)){
            $this->resume = $data['resume'];
        }
        if(array_key_exists('facebook_url',$data)){
            $this->facebook_url = $data['facebook_url'];
        } if(array_key_exists('twitter_url',$data)){
            $this->twitter_url = $data['twitter_url'];
        } if(array_key_exists('linkedin_url',$data)){
            $this->linkedin_url = $data['linkedin_url'];
        } if(array_key_exists('google_plus_url',$data)){
            $this->google_plus_url = $data['google_plus_url'];
        }
        if(array_key_exists('pinterest_url',$data)){
            $this->pinterest_url = $data['pinterest_url'];
        }
        if(array_key_exists('skype_url',$data)){
            $this->skype_url = $data['skype_url'];
        }
        if(array_key_exists('contactName',$data)){
            $this->contactName = $data['contactName'];
        }
        if(array_key_exists('contactEmail',$data)){
            $this->contactEmail = $data['contactEmail'];
        }
        if(array_key_exists('contactSubject',$data)){
            $this->contactSubject = $data['contactSubject'];
        }
        if(array_key_exists('contactMessage',$data)){
            $this->contactMessage = $data['contactMessage'];
        }


        if(array_key_exists('id',$data)){
            $this->id = $data['id'];
        }
        return $this;
    }

    public function store(){
        try {

            $stm =  $this->conn->prepare("INSERT INTO `about` (`name`,`age`,`phone`,`email`,`address`,`story`,`image`,`resume`,`facebook_url`,`twitter_url`,`linkedin_url`,`google_plus_url`,`pinterest_url`,`skype_url`) 
                                        VALUES(:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n)");
            $result =$stm->execute(array(
                ':a' => $this->name,
                ':b' => $this->age,
                ':c' => $this->phone,
                ':d' => $this->email,
                ':e' => $this->address,
                ':f' => $this->story,
                ':g' => $this->image,
                ':h' => $this->resume,
                ':i' => $this->facebook_url,
                ':j' => $this->twitter_url,
                ':k' => $this->linkedin_url,
                ':l' => $this->google_plus_url,
                ':m' => $this->pinterest_url,
                ':n' => $this->skype_url
            ));
            if($result) {
                echo 'Data successfully Inserted ';
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function index(){
        try {

            $stm =  $this->conn->prepare("SELECT * FROM `about` ORDER  BY id DESC limit 1 ");

            $stm->execute();
            return $stm->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function store1(){
        $conn=  mysqli_connect("localhost","root","","portfolio");
        $this->contactName=$_POST['contactName'];
        $this->contactEmail=$_POST['contactEmail'];
        $this->contactSubject=$_POST['contactSubject'];
        $this->contactMessage=$_POST['contactMessage'];
        $query =  "INSERT INTO  `contact_form` (`contactName`, `contactEmail`, `contactSubject`, `contactMessage`) VALUES ('".$this->contactName."', '".$this->contactEmail."',  '".$this->contactSubject."', '".$this->contactMessage."');";
            $result= mysqli_query($conn, $query);

        if ($result === TRUE) {
            echo "New Record created successfully";

        } else {
            echo "Error:";
        }
    }



}

