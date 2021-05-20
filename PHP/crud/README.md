CRUD APP - Create,Read,Update,Delete)
We will show our all records by mysqli_fetch_assoc.
1. Create ---> We will create/insert new record by asking to user title and message and by post request we will save it to our database and corospondingly our database will show this :o

2. Update ---> When anyone will hover two option will be shown delete,edit. When user will click on edit. 
a modal should be open and have to update title and message. how will we do this? 
    we will add a class `edit` in it and we will make it array collection of array of edit buttons. 
    and will use .target.parentNode.parentNode for reacgin upto td's skeleten and than we will select td[0] and it will gonna be our title taf and we can also select message by td[1] and we will we console it for 
    acknoledge and we will use modalttl.val = td.val 

3. Delete ---> We will delete the selected victim :p by doing same like Array.foreach(classname[del])
    and we will add event listen to delete button and when pressed than delete e.target


        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $inf1 = $_POST['inf1'];
      $inf2 = $_POST['inf2'];
      $inf0 = $_POST['serialnumber'];
      echo '<br> iron '. $inf1 . ' man ' . $inf2 . " serial number is " . $inf0;
      $sqlinsert = "UPDATE `notes` SET `message` = '$inf1', `description` = '$inf2' WHERE `notes`.`sno`=$inf0";
      $updateresult = mysqli_connect($connection,$sqlinsert);
      if($updateresult){
        echo 'Updated successfully';
      }
      else{
        echo "Error while udating";
      }
    }
    else{
      echo '<br> fked up';
    }