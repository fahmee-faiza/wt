function validation() {
        var id = document.getElementById('jobID').value;
        var com = document.getElementById('company').value;
        var des = document.getElementById('designation').value;
        var con = document.getElementById('contactaddress').value;
        var pho = document.getElementById('phone').value;
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
        if(des == "") {
          document.getElementById('Des').innerHTML = "Please fill up the field";
          document.getElementById('Des').style.color = "red";
          return false; 
        }
        if(con == "") {
          document.getElementById('Con').innerHTML = "Please fill up the field";
          document.getElementById('Con').style.color = "red";
          return false; 
        }
        if(pho == "") {
          document.getElementById('Pho').innerHTML = "Please fill up the field";
          document.getElementById('Pho').style.color = "red";
          return false; 
        }
        if(dat == "") {
          document.getElementById('Dat').innerHTML = "Please fill up the field";
          document.getElementById('Dat').style.color = "red";
          return false; 
        }
        return true;
        
      }