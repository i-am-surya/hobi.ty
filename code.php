<?php

include('security.php');


/* ======= CREATE ACCOUNT BUTTON =========*/

if(isset($_POST['create_account_btn']))
{
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);
    $usertype = mysqli_real_escape_string($connection, $_POST['usertype']);

    $emailquery = "SELECT * FROM register where email='$email' ";
    $emailqueryrun = mysqli_query($connection, $emailquery);

    $emailcount = mysqli_num_rows($emailqueryrun);

    if($emailcount > 0)
    {
        $_SESSION['status'] = "Email Already Exists !";
        $_SESSION['status_code'] = "info";
        header('Location: create_account.php');
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email','$password','$usertype')";
            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                $_SESSION['status'] = "Account Created !";
                $_SESSION['status_code'] = "success";
                header('Location: index.php');
            }
            else
            {
                $_SESSION['status'] = "Account NOT Created !";
                $_SESSION['status_code'] = "error";
                header('Location: create_account.php');
            }
        }
        else
        {
            $_SESSION['status'] = "Passwords not matching !";
            $_SESSION['status_code'] = "error";
            header('Location: create_account.php');
        }
    }

}






/* ======= LOGIN BUTTON =========*/

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection,$query);

    $usertypelogin = mysqli_fetch_array($query_run);

    if($usertypelogin['usertype'] == "admin")
    {
        $_SESSION['username'] = $email_login;
        header('location:admin.php');
    }
    else if($usertypelogin['usertype'] == "user")
    {
        $_SESSION['cusername'] = $email_login;
        header('location:user.php');
    }
    else
    {
        $_SESSION['status'] = "Email Id or Password is not valid !";
        $_SESSION['status_code'] = "error" ;

        header('location:index.php');
    }
}


/* =========== LOGOUT BUTTON ===========*/

if(isset($_POST['logout_btn'])){

    session_destroy();
    header('location:index.php');
}




/* ======== ADMIN REGISTER BUTTON ========== */


if(isset($_POST['adminreg_btn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    
    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: adminregister.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email','$password','$usertype')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: adminregister.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: adminregister.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: adminregister.php');  
        }
    }

}




/*========== ADMIN UPDATE BUTTON ============*/

if(isset($_POST['adminupdate_btn'])){
    
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password',usertype= 'admin' WHERE id='$id' ";

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['status']= "Your data is updated !";
        $_SESSION['status_code']= "success";
        header('location:adminregister.php');
    } else
    {
        $_SESSION['status']= "Your data is NOT updated !";
        $_SESSION['status_code']= "error";
        header('location:adminregister.php');
    }
}



/* ======== ADMIN DELETE BUTTON ======== */

if(isset($_POST['admindelete_btn']))
{

    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status']= "Admin Profile is Deleted !";
        $_SESSION['status_code']= "success";
        header('location:adminregister.php');
    } else
    {
        $_SESSION['status']= "Admin Profile NOT Deleted !";
        $_SESSION['status_code']= "error";
        header('location:adminregister.php');
    }
}






/* ======== USER REGISTER BUTTON ========== */


if(isset($_POST['userreg_btn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    
    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: userregister.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email','$password','$usertype')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                $_SESSION['status'] = "User Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: userregister.php');
            }
            else 
            {
                $_SESSION['status'] = "User Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: userregister.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: userregister.php');  
        }
    }

}




/*========== USER UPDATE BUTTON ============*/

if(isset($_POST['userupdate_btn'])){
    
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password',usertype= 'user' WHERE id='$id' ";

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['status']= "Your data is updated !";
        $_SESSION['status_code']= "success";
        header('location:userregister.php');
    } else
    {
        $_SESSION['status']= "Your data is NOT updated !";
        $_SESSION['status_code']= "error";
        header('location:userregister.php');
    }
}



/* ======== USER DELETE BUTTON ======== */

if(isset($_POST['userdelete_btn']))
{

    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status']= "User Profile is Deleted !";
        $_SESSION['status_code']= "success";
        header('location:userregister.php');
    } else
    {
        $_SESSION['status']= "User profile NOT Deleted !";
        $_SESSION['status_code']= "error";
        header('location:userregister.php');
    }
}




/* ===========CATEGORY BUTTON========== */

if(isset($_POST['category_save']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];

    echo $name;
    echo $description;

    $query = "INSERT INTO interests (name,description) VALUES ('$name','$description')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Category Added !";
        $_SESSION['status_code'] = "success";
        header('location:interests.php');
    }
    else
    {
        $_SESSION['status'] = "Category Not Added !";
        $_SESSION['status_code'] = "error";
        header('location:interests.php');
    }
}




/* ========== CATEGORY UPDATE BUTTON ==========*/

if(isset($_POST['category_update_btn']))
{
    $update_id = $_POST['update_id'];
    $update_name = $_POST['update_name'];
    $update_description = $_POST['update_description'];

    $query = "UPDATE interests SET name='$update_name', description='$update_description' WHERE id='$update_id' ";

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['status']= "Category is updated !";
        $_SESSION['status_code'] = "success";
        header('location:interests.php');
    } else
    {
        $_SESSION['status']= "Category NOT updated !";
        $_SESSION['status_code'] = "error";
        header('location:interests.php');
    }
}





/* ============== DELETE CATEGORY ===========*/


if(isset($_POST['category_delete_button']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM interests WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status']= "Category is deleted !";
        $_SESSION['status_code'] = "success";
        header('location:interests.php');
    } else
    {
        $_SESSION['status']= "Category is NOT deleted !";
        $_SESSION['status_code'] = "error";
        header('location:interests.php');
    }
}




/* ====== CATEGORY LIST SELECT BUTTON =====*/

if(isset($_POST['category_list_save']))
{
    $category_id = $_POST['category_list_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $query = "INSERT INTO interests_list (interests_id,listname,listdescription) VALUES ('$category_id','$name','$description') ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status']= "Category List is added !";
        $_SESSION['status_code'] = "success";
        header('location:interests_list.php');
    } else
    {
        $_SESSION['status']= "Category List is NOT added !";
        $_SESSION['status_code'] = "error";
        header('location:interests_list.php');
    }

}




/* ==========CATEGORY LIST UPDATE BUTTON =====*/

if(isset($_POST['category_list_update_btn']))
{

    $updating_id = $_POST['updating_id'];
    $list_id = $_POST['list_id'];
    $list_name = $_POST['list_name'];
    $list_description = $_POST['list_description'];

    $query = "UPDATE interests_list SET interests_id= '$list_id', listname='$list_name', listdescription='$list_description' WHERE id='$updating_id' ";

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['status']= "Category List is updated !";
        $_SESSION['status_code'] = "success";
        header('location:interests_list.php');
    } else
    {
        $_SESSION['status']= "Category NOT updated !";
        $_SESSION['status_code'] = "error";
        header('location:interests_list.php');
    } 
}



/* ============== DELETE CATEGORY LIST ===========*/


if(isset($_POST['category_list_delete_button']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM interests_list WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status']= "Category List is deleted !";
        $_SESSION['status_code'] = "success";
        header('location:interests_list.php');
    } else
    {
        $_SESSION['status']= "Category List is NOT deleted !";
        $_SESSION['status_code'] = "error";
        header('location:interests_list.php');
    }
}



/* ===========EVENT ADD BUTTON========== */

if(isset($_POST['event_save']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $eventtype = $_POST['eventtype'];

    $query = "INSERT INTO events (eventname,eventdescription,eventtype) VALUES ('$name','$description','$eventtype')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Event Added !";
        $_SESSION['status_code'] = "success";
        header('location:events.php');
    }
    else
    {
        $_SESSION['status'] = "Event Not Added !";
        $_SESSION['status_code'] = "error";
        header('location:events.php');
    }
}




/* ========== EVENT UPDATE BUTTON ==========*/

if(isset($_POST['event_update_button']))
{
    $edit_id = $_POST['edit_id'];
    $update_event_name = $_POST['update_event_name'];
    $update_event_description = $_POST['update_event_description'];
    $update_event_type = $_POST['update_event_type'];

    echo $edit_id;
    echo $update_event_name;
    echo $update_event_description;
    echo $update_event_type;

    $query = "UPDATE events SET eventname='$update_event_name', eventdescription='$update_event_description', eventtype='$update_event_type' WHERE id='$edit_id' ";

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['status']= "Event is updated !";
        $_SESSION['status_code'] = "success";
        header('location:events.php');
    } else
    {
        $_SESSION['status']= "Event NOT updated !";
        $_SESSION['status_code'] = "error";
        header('location:events.php');
    }
}





/* ============== DELETE EVENT ===========*/


if(isset($_POST['event_delete_button']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM events WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status']= "Event is deleted !";
        $_SESSION['status_code'] = "success";
        header('location:events.php');
    } else
    {
        $_SESSION['status']= "Event NOT deleted !";
        $_SESSION['status_code'] = "error";
        header('location:events.php');
    }
}


/* ===========LOCATION ADD BUTTON========== */

if(isset($_POST['location_save']))
{
    $district = $_POST['district'];
    $state = $_POST['state'];
    $country = $_POST['country'];

    echo $district;
    echo $state;
    echo $country;

    $query = "INSERT INTO locations (district,state,country) VALUES ('$district','$state','$country')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Location Added !";
        $_SESSION['status_code'] = "success";
        header('location:locations.php');
    }
    else
    {
        $_SESSION['status'] = "Location Not Added !";
        $_SESSION['status_code'] = "error";
        header('location:locations.php');
    }
}




/* ========== LOCATION UPDATE BUTTON ==========*/

if(isset($_POST['location_update_button']))
{
    $edit_id = $_POST['edit_id'];
    $edit_district = $_POST['edit_district'];
    $edit_state = $_POST['edit_state'];
    $edit_country = $_POST['edit_country'];

    $query = "UPDATE locations SET district='$edit_district', state='$edit_state', country='$edit_country' WHERE id='$edit_id' ";

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['status']= "Location is updated !";
        $_SESSION['status_code'] = "success";
        header('location:locations.php');
    } else
    {
        $_SESSION['status']= "Location NOT updated !";
        $_SESSION['status_code'] = "error";
        header('location:locations.php');
    }
}





/* ============== DELETE LOCATION ===========*/


if(isset($_POST['location_delete_button']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM locations WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status']= "Location is deleted !";
        $_SESSION['status_code'] = "success";
        header('location:locations.php');
    } else
    {
        $_SESSION['status']= "Location NOT deleted !";
        $_SESSION['status_code'] = "error";
        header('location:locations.php');
    }
}



?>
