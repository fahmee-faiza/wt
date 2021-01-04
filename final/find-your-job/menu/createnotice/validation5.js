function validation() {
        var id = document.getElementById('noticeID').value;
        var com = document.getElementById('details').value;
        var dat = document.getElementById('date').value;
        
        if(id == "") {
           document.getElementById('Id').innerHTML = "Please fill up the field";
           document.getElementById('Id').style.color = "red";
           return false;    
        }

        if(com == "") {
          document.getElementById('Com').innerHTML = "Please fill up the field";
          document.getElementById('Com').style.color = "red";
          return false; 
        }
        
        if(dat == "") {
          document.getElementById('Dat').innerHTML = "Please fill up the field";
          document.getElementById('Dat').style.color = "red";
          return false; 
        }
        return true;
        
      }