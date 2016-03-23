<?php 
class Menu { 
    public $Menu_Item; 
    public $Flag ; 
    
    
    function Get_Menu() { 
        print 'Inside `aMemberFunc()`';

    }

    function Change_Menu() { 
        print 'Inside `aMemberFunc()`'; 

    } 
} 

      



$foo = new Menu; 



?> 



<?php 
class Service_Taker { 
    public $Type; 
    public $Name ; 
    public $Roll_Number; 
    public $Type_Student ; 
    public $Type_Faculty; 
    public $Number_Of_Days ; 
    
    function Login() { 
        print 'Inside `aMemberFunc()`'; 
    } 
    function Logout() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Leave() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Report_Utensils() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Operate_Menu() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Provide_Feedbak() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Initiate_Payment() { 
        print 'Inside `aMemberFunc()`'; 
    }
    
} 

$foo = new Service_Taker; 
?> 


<?php 
class Feedback { 
    public $Feedback; 
    
    
    function Submit_Feedback() { 
        print 'Inside `aMemberFunc()`'; 
    } 
} 

$foo = new Feedback; 
?>

<?php 
class Payment { 
    public $Fees; 
    public $Fine ; 
    public $Dues; 
    public $Flag ; 
    
    function Pay_Fees() { 
        print 'Inside `aMemberFunc()`'; 
    } 
    function Pay_Dues() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Get_Refund() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Impose_Fine() { 
        print 'Inside `aMemberFunc()`'; 
    }
} 

$foo = new Payment; 
?> 

<?php 
class Menu_Item{ 
    public $Day; 
    public $Time; 
    public $Type; 
    public $Votes; 
    public $Item_Name; 
    public $Flag; 
    
    function Menu_Details() { 
        print 'Inside `aMemberFunc()`'; 
    } 
    function Increment() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Set_Time() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Set_Day() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Set_Name() { 
        print 'Inside `aMemberFunc()`'; 
    }
    
} 

$foo = new Menu_Item; 
?> 

<?php 
class Service_Provider { 
    public $Designation; 
    public $Name ; 
    public $Contact_Details; 

    function Verify_Leave() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Veiw_Report() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Stop_Polling() { 
        print 'Inside `aMemberFunc()`'; 
     
    }
    function Start_Polling() { 
        //print 'Inside `aMemberFunc()`'; 
        
                                  $query4="UPDATE mess_users SET poll_flag=1;";
                                  $results4 = mysql_query($query4);
    }
    function Initiate_Payment() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Inventory_Work() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Operate_Menu() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Check_Feedback() { 
        print 'Inside `aMemberFunc()`'; 
    } 
} 

$foo = new Service_Provider; 
?> 

<?php 
class Stock { 
    public $Stock; 
    public $Expiry ; 
    public $Stock_Qty; 
    public $Stock_Name ; 
    
    function Add_Stock() { 
        print 'Inside `aMemberFunc()`'; 
    } 
    function Delete_Stock() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Current_Stock() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Get_Expiry() { 
        print 'Inside `aMemberFunc()`'; 
    }
    function Get_Stock_Name() { 
        print 'Inside `aMemberFunc()`'; 
    }
} 

$foo = new Stock; 
?> 

<?php 
class Polling { 
    
    public $Flag; 
    public $Vote; 
    
    function Get_Poll() { 
        print 'Inside `aMemberFunc()`'; 
    } 
} 

$foo = new Polling; 
?> 


<?php 
function date_picker($name, $startyear=NULL, $endyear=NULL)
{
    if($startyear==NULL) $startyear = date("Y");
    if($endyear==NULL) $endyear=date("Y")+10; 

    $months=array('','January','February','March','April','May',
    'June','July','August', 'September','October','November','December');

    // Month dropdown
    $html="<select name=\"".$name."month\">";

    for($i=01;$i<=12;$i++)
    {
       $html.="<option value='$i'>$months[$i]</option>";
    }
    $html.="</select> ";
   
    // Day dropdown
    $html.="<select name=\"".$name."day\">";
    for($i=01;$i<=31;$i++)
    {
       $html.="<option $selected value='$i'>$i</option>";
    }
    $html.="</select> ";

    // Year dropdown
    $html.="<select name=\"".$name."year\">";

    for($i=$startyear;$i<=$endyear;$i++)
    {      
      $html.="<option value='$i'>$i</option>";
    }
    $html.="</select> ";

    return $html;
}
?> 
