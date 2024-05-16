<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evaluation | Taskmaster</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .ask{
            background-color: #5a8b97b2 !important;
            height: 100vh !important;
        }

        form{
            min-width: 768px !important;
        }
        .select-dep{
            width: 100%
        }
        .select-dep, select{
            display:flex !important;
            align-items: center;
            height: 40px !important;
            margin: 2px;
        }
    </style>
</head>
  <body>
    <div class="container-fluid bg-light ask d-flex justify-content-center align-items-center">
        <div>
            <h2 class="text-center">Add Evaluation Questions</h2>
            <form action="../php/addEvaluation.php" method="get" class=" w-100 m-5">
                <label for="question">Question Title</label>
                <input name="title" id="question" type="text" class="form-control" placeholder="Write question title . . ." required>
                <label for="question">Choose A</label>
                <input name="chooseA" id="question" type="text" class="form-control" placeholder="Write choose A . . ." required>
                <label for="question">Choose B</label>
                <input name="chooseB" id="question" type="text" class="form-control" placeholder="Write choose B . . ." required>
                <label for="question">Choose C</label>
                <input name="chooseC" id="question" type="text" class="form-control" placeholder="Write choose C . . ." required>
                <label for="question">Choose D</label>
                <input name="chooseD" id="question" type="text" class="form-control" placeholder="Write choose D . . ." required>
                <label for="question">Answer</label>
                <input name="answer" id="question" type="text" class="form-control" placeholder="Write answer . . ." required>
                <p class="mt-2">For who?</p>
                <div class="select-dep">
                    <select name="edu" id="lvlofedu" title="Select" class="form-control" required>
                        <option value="select">Select</option>
                        <option value="high">High School</option>
                        <option value="college">Collage</option>
                    </select>
                    <select title="dep-title" name="department" id="department" class="form-control" required disabled>
                        <option value="">Select Department</option>
                    </select>  
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button class="btn btn-success mt-3">Insert Question</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // -------- Enable department
        const educationLevelSelect = document.getElementById("lvlofedu");
        const departmentSelect = document.getElementById("department");
        const acadamicSelect = document.getElementById("acadamic");
        
        function updateDepartmentOptions() {
        const selectedLevel = educationLevelSelect.value;
        departmentSelect.disabled = true; // Disable department selection initially
        if (selectedLevel === "select") {
                    departmentSelect.innerHTML = "";
                    departmentSelect.disabled = true;
                } else if (selectedLevel === "high") {
                    departmentSelect.innerHTML = ""; // Clear existing options
                    departmentSelect.options.add(new Option("Department"));
                    departmentSelect.options.add(new Option("Mathematics"));
                    departmentSelect.options.add(new Option("English"));
                    departmentSelect.options.add(new Option("Amharic"));
                    departmentSelect.options.add(new Option("Science"));
                    departmentSelect.options.add(new Option("Art"));
                
                } else if (selectedLevel === "college") {
                    departmentSelect.innerHTML = ""; // Clear existing options
                    departmentSelect.options.add(new Option("Department"));
                    departmentSelect.options.add(new Option("Accounting and Finance"));
                    departmentSelect.options.add(new Option("Human Resources Management"));
                    departmentSelect.options.add(new Option("Management"));
                    departmentSelect.options.add(new Option("Marketing"));
                    departmentSelect.options.add(new Option("Engineering"));
                    departmentSelect.options.add(new Option("Computer Science"));
                    
                } else {
                    departmentSelect.innerHTML = ""; // Clear existing options
                    departmentSelect.options.add(new Option("Select Department")); // Default option
                }
        
                if (selectedLevel !== "") {
                    departmentSelect.disabled = false; // Enable department selection after choosing a level
                }
        
                if (selectedLevel === "select") {
            departmentSelect.disabled = true; // Enable department selection after choosing a valid level
        }
                }
        
        educationLevelSelect.addEventListener("change", updateDepartmentOptions);
        
        // Call the function initially to set the disabled state
        updateDepartmentOptions();
        
        // Form validation and popup message
        const form = document.querySelector("form");
        form.addEventListener("submit", (event) => {
        if (educationLevelSelect.value === "select" || departmentSelect.value === "" || departmentSelect.value === "Department") {
            event.preventDefault();
        
            alert("Please select a valid Level of Education, Department, and Academic Degree."); // Display popup message
        }
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>