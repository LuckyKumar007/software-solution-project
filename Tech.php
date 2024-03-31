<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Technologies</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        margin-bottom: 10px;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Our Technologies</h2>
    <ul id="technologies">
        <!-- Technologies will be dynamically added here -->
    </ul>
</div>

<script>
// List of technologies
var technologies = [
    "Artificial Intelligence",
    "Blockchain",
    "Cloud Computing",
    "Cybersecurity",
    "Data Analytics",
    "Internet of Things (IoT)",
    "Machine Learning",
    "Mobile App Development",
    "Web Development"
];

// Function to display technologies
function displayTechnologies() {
    var technologiesList = document.getElementById("technologies");
    technologiesList.innerHTML = ''; // Clear previous list

    // Loop through technologies and add them to the list
    technologies.forEach(function(tech) {
        var li = document.createElement("li");
        li.textContent = tech;
        technologiesList.appendChild(li);
    });
}

// Call the function to display technologies when the page loads
window.onload = displayTechnologies;
</script>

</body>
</html>
