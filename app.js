users = [{username:"akib",password:"12345", type:"client"}, {username:"banna",password:"12345", type:"manager"}, {username:"fahad",password:"12345", type:"analyst"}, {username:"fahad",password:"12345", type:"developer"}];

function login(){
    userName = document.getElementById("username").value;
    pass = document.getElementById("pass").value;
    for(i=0;i<users.length;i++){
        if(userName==users[i].username && pass==users[i].password){
            if(users[i].type=="manager")document.getElementById('loginForm').action='Project Manager/projectManager.html';
            else if(users[i].type=="analyst")document.getElementById('loginForm').action='Employee/employee.html';
            else if(users[i].type=="client") document.getElementById('loginForm').action='client/client.html';
            else if(users[i].type=="developer") document.getElementById('loginForm').action='Developer/developer.html';
            return true;
        }
    }
    return false;
}


