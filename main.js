window.onload = function(){
    let newJob = document.getElementById("newJob");
    let change = document.getElementById("change");
    let fname =document.getElementById("fname");
    let lname = document.getElementById("lname");
    let password = document.getElementById("password");
    let email = document.getElementById("email");
    let telephone = document.getElementById("telephone");
    let login = document.getElementById("login");
    let adduser = document.getElementById("adduser");
    
    let checker = /(?=.{8,})(?=.*\w{1,}.*)(?=.*\d{1,}.*)(?=.*[A-Z]{1,}.*)/;

    newJob.addEventListener("click",function(){
        let xml = new XMLHttpRequest();
        xml.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                change.innerHTML = this.responseText;
            }
        }
        xml.open("GET","ajax.php?newJob=true",true);
        xml.send();
    });
    adduser.addEventListener("click",function(){
        let xml = new XMLHttpRequest();
        xml.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                change.innerHTML = this.responseText;
            }
        }
        xml.open("GET","ajax.php?addUser=true",true);
        xml.send();
    });
    login.onsubmit = function(e){
        if (checker.test(password.value) == false || password.value==""){
            password.classList.add("invalid");
            e.preventDefault();
        }
       
    }
    
}