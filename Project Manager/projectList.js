projectList = [{
    projName: "SPMS", projectOverview: "In this system IUB students can see their grades, the CLOs they have completed, the mapping of CLOs with PLOs. Faculty can upload grade-sheet and CLO achived by the students.", client:"Arnoy Khan", startingDate: "01/04/2023", deadline: "05/04/2023", budget:"1000$", assignedTeam: [
        { empName: "Tamim Fatema", role: "System Analyst", status: "Active", taskStatus: "Completed" },
        { empName: "Samnoon Ahmed", role: "Visual Designer", status: "Active", taskStatus: "On process" },
        { empName: "Akib Raihan", role: "Developer", status: "On Leave", taskStatus: "Yet to start" }]
},
{
    projName: "AlumniIUB", projectOverview: "As we live, our hearts turn colder. Cause pain is what we go through as we become older. We get insulted by others, lose trust for those others. We get back stabbed by friends. It becomes harder for us to give others a hand. We get our heart broken by people we love, even that we give them all", client:"Sabrina Alam", startingDate: "31/03/2023",deadline: "05/04/2023",budget:"1500$", assignedTeam: [
        { empName: "Dilan", role: "System Analyst", status: "Active", taskStatus: "Completed" },
        { empName: "Rashid Shabab", role: "Visual Designer", status: "Active", taskStatus: "On process" },
        { empName: "Injamam", role: "Developer", status: "On Leave", taskStatus: "Yet to start" }]
}
];
window.onload = function () {
    
    drop = document.getElementById("projectDrop");
    for (i = 0; i < projectList.length; i++) {
        listid=projectList[i].projName;
        list = document.createElement("li");
        list.innerHTML = `<a href="#" id="${listid}" onclick="select('${projectList[i].projName}')"
    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">${projectList[i].projName}</a>`;
        drop.appendChild(list);
    }
    document.getElementById("showdropdown").innerText=projectList[0].projName;
    document.getElementById("projectoverview").innerText= "Project Overview : "+ projectList[0].projectOverview;
    document.getElementById("date").innerText= "Starting Date : "+ projectList[0].startingDate;
    document.getElementById("deadline").innerText= "Deadline : "+ projectList[0].deadline;
    document.getElementById("budget").innerText= "Budget: "+ projectList[0].budget;
    document.getElementById("clientName").innerText= "Client: "+ projectList[0].client;
    // assignedTeam
    for(j=0;j<projectList[0].assignedTeam.length;j++){
        tablebody= document.getElementById("tablebody");
        tablerow = document.createElement("tr");
        tablerow.id="employee"
        tablerow.className ="hover:bg-gray-50"
        tablerow.innerHTML = `
        <td id="name" class="px-6 py-4 font-normal text-gray-700">${projectList[0].assignedTeam[j].empName}</td>
        <td id="role" class="px-6 py-4 font-normal text-gray-700">${projectList[0].assignedTeam[j].role}</td>
        <td id="status" class="px-6 py-4 font-normal text-gray-700">${projectList[0].assignedTeam[j].status}</td>
        <td id="task" class="px-6 py-4 font-normal text-gray-700">${projectList[0].assignedTeam[j].taskStatus}</td>
`;
    tablebody.appendChild(tablerow);
    }
}
function select(projectName){
    document.getElementById("showdropdown").innerText=projectName;
    for (i = 0; i < projectList.length; i++){
        if(projectList[i].projName==projectName){
            document.getElementById("projectoverview").innerText= "Project Overview : "+ projectList[i].projectOverview;
            document.getElementById("date").innerText= "Starting Date : "+ projectList[i].startingDate;
            document.getElementById("deadline").innerText= "Deadline : "+ projectList[i].deadline;
            document.getElementById("budget").innerText= "Budget : "+ projectList[i].budget;
            document.getElementById("clientName").innerText= "Client : "+ projectList[i].client;
            for(j=0;j<projectList[0].assignedTeam.length;j++){
                tablebody= document.getElementById("tablebody");
                tablerow = document.getElementById('employee');
                tablerow.className ="hover:bg-gray-50"
                tablerow.innerHTML = `
                <td id="name" class="px-6 py-4 font-normal text-gray-700">${projectList[i].assignedTeam[j].empName}</td>
                <td id="role" class="px-6 py-4 font-normal text-gray-700">${projectList[i].assignedTeam[j].role}</td>
                <td id="status" class="px-6 py-4 font-normal text-gray-700">${projectList[i].assignedTeam[j].status}</td>
                <td id="task" class="px-6 py-4 font-normal text-gray-700">${projectList[i].assignedTeam[j].taskStatus}</td>`;
            tablebody.appendChild(tablerow);
            }
        }
    }
    document.getElementById("dropdown").classList.add("hidden");
    
}