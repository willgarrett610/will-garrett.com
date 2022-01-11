var req = new XMLHttpRequest();
req.addEventListener("load", function() {
    window.projects = JSON.parse(this.responseText);

    generateProjects();
});
req.open("GET", "/projects.php");
req.send();

function generateProjects() {
    var projects = window.projects;
    var projectList = document.getElementById("project_list");
    projectList.style.display = "grid";
    projectList.innerHTML = "";
    for (const project of projects) {
        console.log(project);

        var languageString = project.languages.reduce((prev, curr) => prev + curr.name + ", ", "");
        languageString = languageString.substr(0, languageString.length - 2);

        var projectContainer = document.createElement("div");
        projectContainer.className = "card_container";
        projectContainer.innerHTML = '<a href="' + 
        project.link + 
        '"> <div class="card"> <div class="card_image"><img src="' + 
        project.image + 
        '"> </div> <div class="card_title">' +
        project.name +
        ' &#8226; ' + 
        languageString +
        ' &#8226; ' + 
        project.year +
        '</div> </div> </a>';
        projectList.appendChild(projectContainer);
    }
}