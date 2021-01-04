function validation() {
        var id = document.getElementById('clientID').value;
        var cli = document.getElementById('clientname').value;
        var em = document.getElementById('email').value;
        var con = document.getElementById('contactnum').value;
        var com = document.getElementById('company').value;
        var po = document.getElementById('postno').value;
        
        if(id == "") {
           document.getElementById('Id').innerHTML = "Please fill up the field";
           document.getElementById('Id').style.color = "red";
           return false;    
        }

        if(cli == "") {
          document.getElementById('Com').innerHTML = "Please fill up the field";
          document.getElementById('Com').style.color = "red";
          return false; 
        }
        if(em == "") {
          document.getElementById('Des').innerHTML = "Please fill up the field";
          document.getElementById('Des').style.color = "red";
          return false; 
        }
        if(con == "") {
          document.getElementById('Con').innerHTML = "Please fill up the field";
          document.getElementById('Con').style.color = "red";
          return false; 
        }
        if(com == "") {
          document.getElementById('Pho').innerHTML = "Please fill up the field";
          document.getElementById('Pho').style.color = "red";
          return false; 
        }
        if(po == "") {
          document.getElementById('Dat').innerHTML = "Please fill up the field";
          document.getElementById('Dat').style.color = "red";
          return false; 
        }
        return true;
        
      }