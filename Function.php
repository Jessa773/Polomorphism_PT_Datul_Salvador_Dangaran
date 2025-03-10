<?php
function runProgram($employees) {
    foreach ($employees as $employee) {
        echo "Name: " . $employee->getName() . "; ID: " . $employee->getId() . "; Position: " . $employee->getPosition() . "; Salary: " . $employee->getSalary();

        if ($employee instanceof Bonus) {
            echo ", Bonus: " . $employee->calculateBonus();
        }

        echo "<br>";
    }
}

echo "Run 1:<br>";
$employees1 = [
    new FullTimeEmployee("Jessa", "FT001", "Manager", 10000),
    new PartTimeEmployee("Jom", "PT001", "Assistant", 15, 30),
    new ContractEmployee("Kristian", "CT001", "Developer", 20000)
];
runProgram($employees1);

echo "<br>Run 2:<br>";
$employees2 = [
    new FullTimeEmployee("Josh", "FT002", "Engineer", 20000),
    new PartTimeEmployee("Eve", "PT002", "Clerk", 10, 30),
    new ContractEmployee("Frank", "CT002", "Designer", 10000)
];
runProgram($employees2);

echo "<br>Run 3:<br>";
$employees3 = [
    new FullTimeEmployee("Chad", "FT003", "Architect", 30000),
    new PartTimeEmployee("Herry", "PT003", "Technician", 18, 25),
    new ContractEmployee("Ivy", "CT003", "Consultant", 15000)
];
runProgram($employees3);

echo "<br>Run 4:<br>";
$employees4 = [
    new FullTimeEmployee("Jazmine", "FT004", "Supervisor", 10000),
    new PartTimeEmployee("Mazy", "PT004", "Tutor", 18, 15),
    new ContractEmployee("Lyza", "CT004", "Editor", 8000)
];
runProgram($employees4);

echo "<br>Run 5:<br>";
$employees5 = [
    new FullTimeEmployee("Mia", "FT005", "Director", 10000),
    new PartTimeEmployee("Noah", "PT005", "Writer", 16, 30),
    new ContractEmployee("Olivia", "CT005", "Artist", 50000)
];
runProgram($employees5);
?>
