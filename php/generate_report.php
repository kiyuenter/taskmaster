<?php
session_start();
require('../fpdf/fpdf.php');
require '../vendor/autoload.php';
include "connection.php"; // Ensure you have a valid database connection

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Style;
// Fetch POST data
$reportType = $_POST['report_type'];
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
$type = $_POST['format-type'];


// Export with PDF Format (.pdf)
if ($type == "pdf") {
    // Export Registered student list
    if ($reportType == "regStud") {
        class PDF extends FPDF {
            // Page header
            function Header() {
                $this->SetFont('Arial', 'B', 12);
                $this->Cell(0, 10, 'Student Registration Report', 0, 1, 'C');
            }

            // Page footer
            function Footer() {
                $this->SetY(-15);
                $this->SetFont('Arial', 'I', 8);
                $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
            }

            // Table with data
            function LoadData($data) {
                foreach ($data as $row) {
                    $this->Row($row);
                }
            }

            function Row($data) {
                $this->SetFont('Arial', '', 10);
                $this->Cell(10, 10, $data['ID'], 1);
                $this->Cell(35, 10, $data['FName'], 1);
                $this->Cell(35, 10, $data['LName'], 1);
                $this->Cell(50, 10, $data['emailAdd'], 1);
                $this->Cell(40, 10, $data['levelEdu'], 1);
                $this->Cell(40, 10, $data['department'], 1);
                $this->Cell(35, 10, $data['registration_date'], 1);
                $this->Ln();
            }
        }

        $pdf = new PDF('L', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 12);

        // Fetch data from database
        // Select only specific columns
        $sql = "SELECT ID, FName, LName, emailAdd, levelEdu, department, registration_date FROM studentaccount WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
        $result = $conn->query($sql);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        // Column headings
        if (!empty($data)) {
            $pdf->Cell(10, 10, 'ID', 1);
            $pdf->Cell(35, 10, 'FName', 1);
            $pdf->Cell(35, 10, 'LName', 1);
            $pdf->Cell(50, 10, 'emailAdd', 1);
            $pdf->Cell(40, 10, 'levelEdu', 1);
            $pdf->Cell(40, 10, 'department', 1);
            $pdf->Cell(35, 10, 'registration_date', 1);
            $pdf->Ln();

            // Load data into PDF
            $pdf->LoadData($data);
        } else {
            $pdf->Cell(0, 10, 'No data found for the given date range.', 1, 1, 'C');
        }

        $conn->close();
        $pdf->Output('Student_report.pdf', 'D');
    } elseif ($reportType == "regTeach") { //Export registered teacher's list
        class PDF extends FPDF {
            // Page header
            function Header() {
                $this->SetFont('Arial', 'B', 12);
                $this->Cell(0, 10, 'Teacher Registration Report', 0, 1, 'C');
            }

            // Page footer
            function Footer() {
                $this->SetY(-15);
                $this->SetFont('Arial', 'I', 8);
                $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
            }

            // Table with data
            function LoadData($data) {
                foreach ($data as $row) {
                    $this->Row($row);
                }
            }

            function Row($data) {
                $this->SetFont('Arial', '', 10);
                $this->Cell(10, 10, $data['ID'], 1);
                $this->Cell(25, 10, $data['FName'], 1);
                $this->Cell(25, 10, $data['LName'], 1);
                $this->Cell(45, 10, $data['emailAdd'], 1);
                $this->Cell(16, 10, $data['Gender'], 1);
                $this->Cell(23, 10, $data['country'], 1);
                $this->Cell(20, 10, $data['eduLevel'], 1);
                $this->Cell(35, 10, $data['department'], 1);
                $this->Cell(20, 10, $data['academic'], 1);
                $this->Cell(27, 10, $data['statusActivity'], 1);
                $this->Cell(35, 10, $data['registration_date'], 1);
                $this->Ln();
            }
        }

        $pdf = new PDF('L', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 12);

        // Fetch data from database
        // Select only specific columns
        $sql = "SELECT ID, FName, LName, emailAdd, Gender, country, eduLevel, department, academic, statusActivity, registration_date FROM teacheraccount WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
        $result = $conn->query($sql);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        // Column headings
        if (!empty($data)) {
            $pdf->Cell(10, 10, 'ID', 1);
            $pdf->Cell(25, 10, 'FName', 1);
            $pdf->Cell(25, 10, 'LName', 1);
            $pdf->Cell(45, 10, 'emailAdd', 1);
            $pdf->Cell(16, 10, 'Gender', 1);
            $pdf->Cell(23, 10, 'country', 1);
            $pdf->Cell(20, 10, 'eduLevel', 1);
            $pdf->Cell(35, 10, 'department', 1);
            $pdf->Cell(20, 10, 'academic', 1);
            $pdf->Cell(27, 10, 'statusActivity', 1);
            $pdf->Cell(35, 10, 'registration_date', 1);
            $pdf->Ln();

            // Load data into PDF
            $pdf->LoadData($data);
        } else {
            $pdf->Cell(0, 10, 'No data found for the given date range.', 1, 1, 'C');
        }

        $conn->close();
        $pdf->Output('Teacher_report.pdf', 'D');
    } elseif ($reportType == "evalQue") {
        //evaluation questions report
        class PDF extends FPDF {
            // Page header
            function Header() {
                $this->SetFont('Arial', 'B', 12);
                $this->Cell(0, 10, 'Evaluation Questions Report', 0, 1, 'C');
                $this->Cell(0, 10, 'For Quality view please use excel format', 0, 1, 'C');
            }

            // Page footer
            function Footer() {
                $this->SetY(-15);
                $this->SetFont('Arial', 'I', 8);
                $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
            }

            // Table with data
            function LoadData($data) {
                foreach ($data as $row) {
                    $this->Row($row);
                }
            }

            function Row($data) {
                $this->SetFont('Arial', '', 10);
                $this->Cell(10, 10, $data['QID'], 1);
                $this->Cell(34, 10, $data['evaDetail'], 1);
                $this->Cell(34, 10, $data['A'], 1);
                $this->Cell(34, 10, $data['B'], 1);
                $this->Cell(34, 10, $data['C'], 1);
                $this->Cell(34, 10, $data['D'], 1);
                $this->Cell(34, 10, $data['departQ'], 1);
                $this->Cell(34, 10, $data['answer'], 1);
                $this->Cell(34, 10, $data['registration_date'], 1);
                $this->Ln();
            }
        }

        $pdf = new PDF('L', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 12);

        // Fetch data from database
        // Select only specific columns
        $sql = "SELECT QID, evaDetail, A, B, C, D, departQ, answer, registration_date FROM evaluationque WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
        $result = $conn->query($sql);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        // Column headings
        if (!empty($data)) {
            $pdf->Cell(10, 10, 'QID', 1);
            $pdf->Cell(34, 10, 'evaDetail', 1);
            $pdf->Cell(34, 10, 'A', 1);
            $pdf->Cell(34, 10, 'B', 1);
            $pdf->Cell(34, 10, 'C', 1);
            $pdf->Cell(34, 10, 'D', 1);
            $pdf->Cell(34, 10, 'departQ', 1);
            $pdf->Cell(34, 10, 'answer', 1);
            $pdf->Cell(34, 10, 'registration_date', 1);
            $pdf->Ln();

            // Load data into PDF
            $pdf->LoadData($data);
        } else {
            $pdf->Cell(0, 10, 'No data found for the given date range.', 1, 1, 'C');
        }

        $conn->close();
        $pdf->Output('Evaluation_questions_report.pdf', 'D');
    } elseif ($reportType == "evalTeachAn") { //Generate report for Teacher answers on evaluation question
        class PDF extends FPDF {
            // Page header
            function Header() {
                $this->SetFont('Arial', 'B', 12);
                $this->Cell(0, 10, 'Teachers Evaluation Answer Report', 0, 1, 'C');
                $this->Cell(0, 10, 'For Quality view please use excel format', 0, 1, 'C');
            }

            // Page footer
            function Footer() {
                $this->SetY(-15);
                $this->SetFont('Arial', 'I', 8);
                $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
            }

            // Table with data
            function LoadData($data) {
                foreach ($data as $row) {
                    $this->Row($row);
                }
            }

            function Row($data) {
                $this->SetFont('Arial', '', 10);
                $this->Cell(10, 10, $data['ID'], 1);
                $this->Cell(35, 10, $data['teachEmail'], 1);
                $this->Cell(25, 10, $data['q1'], 1);
                $this->Cell(45, 10, $data['q2'], 1);
                $this->Cell(16, 10, $data['q3'], 1);
                $this->Cell(23, 10, $data['q4'], 1);
                $this->Cell(20, 10, $data['q5'], 1);
                $this->Cell(35, 10, $data['q6'], 1);
                $this->Cell(20, 10, $data['q7'], 1);
                $this->Cell(27, 10, $data['q8'], 1);
                $this->Cell(35, 10, $data['q9'], 1);
                $this->Cell(35, 10, $data['q10'], 1);
                $this->Cell(35, 10, $data['registration_date'], 1);
                $this->Ln();
            }
        }

        $pdf = new PDF('L', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 12);

        // Fetch data from database
        // Select only specific columns
        $sql = "SELECT ID, teachEmail, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, registration_date FROM teacherevaanswer WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
        $result = $conn->query($sql);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        // Column headings
        if (!empty($data)) {
            $pdf->Cell(10, 10, 'ID', 1);
            $pdf->Cell(10, 10, 'teachEmail', 1);
            $pdf->Cell(25, 10, 'q1', 1);
            $pdf->Cell(25, 10, 'q2', 1);
            $pdf->Cell(45, 10, 'q3', 1);
            $pdf->Cell(16, 10, 'q4', 1);
            $pdf->Cell(23, 10, 'q5', 1);
            $pdf->Cell(20, 10, 'q6', 1);
            $pdf->Cell(35, 10, 'q7', 1);
            $pdf->Cell(20, 10, 'q8', 1);
            $pdf->Cell(27, 10, 'q9', 1);
            $pdf->Cell(35, 10, 'q10', 1);
            $pdf->Cell(35, 10, 'registration_date', 1);
            $pdf->Ln();

            // Load data into PDF
            $pdf->LoadData($data);
        } else {
            $pdf->Cell(0, 10, 'No data found for the given date range.', 1, 1, 'C');
        }

        $conn->close();
        $pdf->Output('Teacher_Evaluation_Answer_report.pdf', 'D');
    } elseif ($reportType == "asQue") { //Generate report of asked questions
        class PDF extends FPDF {
            // Page header
            function Header() {
                $this->SetFont('Arial', 'B', 12);
                $this->Cell(0, 10, 'Asked Questions Report', 0, 1, 'C');
                $this->Cell(0, 10, 'For Quality view please use excel format', 0, 1, 'C');
            }

            // Page footer
            function Footer() {
                $this->SetY(-15);
                $this->SetFont('Arial', 'I', 8);
                $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
            }

            // Table with data
            function LoadData($data) {
                foreach ($data as $row) {
                    $this->Row($row);
                }
            }

            function Row($data) {
                $this->SetFont('Arial', '', 10);
                $this->Cell(10, 10, $data['AID'], 1);
                $this->Cell(35, 10, $data['askerEmail'], 1);
                $this->Cell(25, 10, $data['subjects'], 1);
                $this->Cell(25, 10, $data['course'], 1);
                $this->Cell(16, 10, $data['degree'], 1);
                $this->Cell(30, 10, $data['course_code'], 1);
                $this->Cell(20, 10, $data['deadln'], 1);
                $this->Cell(35, 10, $data['question'], 1);
                $this->Cell(20, 10, $data['statuss'], 1);
                $this->Cell(35, 10, $data['solution_answer'], 1);
                $this->Cell(30, 10, $data['solverEmail'], 1);
                $this->Cell(30, 10, $data['studentFeedback'], 1);
                $this->Cell(35, 10, $data['registration_date'], 1);
                $this->Ln();
            }
        }

        $pdf = new PDF('L', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 12);

        // Fetch data from database
        // Select only specific columns
        $sql = "SELECT AID, askerEmail, subjects, course, degree, course_code, deadln, question, statuss, solution_answer, solverEmail, studentFeedback, registration_date FROM askedquestions WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
        $result = $conn->query($sql);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        // Column headings
        if (!empty($data)) {
            $pdf->Cell(10, 10, 'AID', 1);
            $pdf->Cell(35, 10, 'askerEmail', 1);
            $pdf->Cell(25, 10, 'subjects', 1);
            $pdf->Cell(25, 10, 'course', 1);
            $pdf->Cell(16, 10, 'degree', 1);
            $pdf->Cell(30, 10, 'course_code', 1);
            $pdf->Cell(20, 10, 'deadln', 1);
            $pdf->Cell(35, 10, 'question', 1);
            $pdf->Cell(20, 10, 'statuss', 1);
            $pdf->Cell(35, 10, 'solution_answer', 1);
            $pdf->Cell(30, 10, 'solverEmail', 1);
            $pdf->Cell(30, 10, 'studentFeedback', 1);
            $pdf->Cell(35, 10, 'registration_date', 1);
            $pdf->Ln();

            // Load data into PDF
            $pdf->LoadData($data);
        } else {
            $pdf->Cell(0, 10, 'No data found for the given date range.', 1, 1, 'C');
        }

        $conn->close();
        $pdf->Output('Asked_Questions_report.pdf', 'D');
    } elseif ($reportType == "upRes") { //upload resource report
        class PDF extends FPDF {
            // Page header
            function Header() {
                $this->SetFont('Arial', 'B', 12);
                $this->Cell(0, 10, 'Uploaded Resource Report', 0, 1, 'C');
            }

            // Page footer
            function Footer() {
                $this->SetY(-15);
                $this->SetFont('Arial', 'I', 8);
                $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
            }

            // Table with data
            function LoadData($data) {
                foreach ($data as $row) {
                    $this->Row($row);
                }
            }

            function Row($data) {
                $this->SetFont('Arial', '', 10);
                $this->Cell(10, 10, $data['RID'], 1);
                $this->Cell(40, 10, $data['title'], 1);
                $this->Cell(40, 10, $data['descr'], 1);
                $this->Cell(40, 10, $data['category'], 1);
                $this->Cell(40, 10, $data['page_count'], 1);
                $this->Cell(40, 10, $data['registration_date'], 1);
                $this->Ln();
            }
        }

        $pdf = new PDF('L', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 12);

        // Fetch data from database
        // Select only specific columns
        $sql = "SELECT RID, title, descr, category, page_count, registration_date FROM resources WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
        $result = $conn->query($sql);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        // Column headings
        if (!empty($data)) {
            $pdf->Cell(10, 10, 'RID', 1);
            $pdf->Cell(40, 10, 'title', 1);
            $pdf->Cell(40, 10, 'descr', 1);
            $pdf->Cell(40, 10, 'category', 1);
            $pdf->Cell(40, 10, 'page_count', 1);
            $pdf->Cell(40, 10, 'registration_date', 1);
            $pdf->Ln();

            // Load data into PDF
            $pdf->LoadData($data);
        } else {
            $pdf->Cell(0, 10, 'No data found for the given date range.', 1, 1, 'C');
        }

        $conn->close();
        $pdf->Output('Uploaded_Resource_report.pdf', 'D');
    } elseif ($reportType == "allD") { // Handle all data report
        class PDF extends FPDF {
            // Page header
            function Header() {
                $this->SetFont('Arial', 'B', 12);
                $this->Cell(0, 10, 'All Data Report', 0, 1, 'C');
                $this->Cell(0, 10, 'Please use excel format to view quality data', 0, 1, 'C');
            }
        
            // Page footer
            function Footer() {
                $this->SetY(-15);
                $this->SetFont('Arial', 'I', 8);
                $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
            }
        
            // Table with data
            function LoadTableData($table, $data) {
                $this->SetFont('Arial', 'B', 10);
                $this->Cell(0, 10, 'Table: ' . $table, 0, 1, 'L');
                
                if (!empty($data)) {
                    // Column headings
                    $this->SetFont('Arial', 'B', 10);
                    $columnNames = array_keys($data[0]);
                    foreach ($columnNames as $colName) {
                        $this->Cell(35, 10, $colName, 1);
                    }
                    $this->Ln();
            
                    // Data rows
                    $this->SetFont('Arial', '', 10);
                    foreach ($data as $row) {
                        foreach ($row as $col) {
                            $this->Cell(35, 10, $col, 1);
                        }
                        $this->Ln();
                    }
                } else {
                    $this->Cell(0, 10, 'No data found for the given date range.', 1, 1, 'C');
                }
                $this->Ln();
            }
        }
        
        if ($type == "pdf") {
            $pdf = new PDF('L', 'mm', 'A4');
            $pdf->AddPage();
            $pdf->SetFont('Arial', '', 12);
        
            // List of specific table names
            $tables = ['studentaccount', 'teacheraccount', 'evaluationque', 'teacherevaanswer', 'askedquestions', 'resources'];
        
            foreach ($tables as $tableName) {
                // Fetch data from each table
                $sql = "SELECT * FROM $tableName WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
                $result = $conn->query($sql);
        
                $data = [];
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        unset($row['sPassword']); // Ensure sPassword is excluded
                        unset($row['tPassword']); // Ensure tPassword is excluded
                        $data[] = $row;
                    }
                }
        
                // Load table data into PDF
                $pdf->LoadTableData($tableName, $data);
            }
        
            $conn->close();
            $pdf->Output('All_reports.pdf', 'D');
        } else {
            // Handle other formats (e.g., Excel) here
        }
    }
} else {
    if ($reportType == "regStud") {
        // Handle Excel report for student registrations
        $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Define border style array
    $borderStyleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => Border::BORDER_THIN,
                'color' => ['argb' => '000000'],
            ],
        ],
    ];

    // Define the columns to select, excluding sPassword
    $columns = "ID, FName, LName, emailAdd, levelEdu, department, registration_date";

    // Fetch data from the studentaccount table
    $sql = "SELECT $columns FROM studentaccount WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
    $result = $conn->query($sql);

    $data = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Add table name as a header
    $sheet->setCellValue('A1', 'Table: studentaccount');
    $rowNumber = 2;

    // Add column headings
    if (!empty($data)) {
        $columnNames = array_keys($data[0]);
        $columnIndex = 'A';
        foreach ($columnNames as $colName) {
            $sheet->setCellValue($columnIndex . $rowNumber, $colName);
            $columnIndex++;
        }

        // Apply border style to the header row
        $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);

        $rowNumber++;

        // Add data rows
        foreach ($data as $row) {
            $columnIndex = 'A';
            foreach ($row as $col) {
                $sheet->setCellValue($columnIndex . $rowNumber, $col);
                $columnIndex++;
            }

            // Apply border style to the data row
            $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);
            
            $rowNumber++;
        }
    } else {
        $sheet->setCellValue('A' . $rowNumber, 'No data found for the given date range.');
    }

    $conn->close();

    // Set the writer to output the spreadsheet
    $writer = new Xlsx($spreadsheet);
    $filename = 'StudentAccount_Report_' . date('Ymd') . '.xlsx';

    // Set the header for downloading the file
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    // Write the file to the output
    $writer->save('php://output');
    exit;
    } elseif ($reportType == "regTeach") {
        // Handle Excel report for teacher registrations
        $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Define border style array
    $borderStyleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => Border::BORDER_THIN,
                'color' => ['argb' => '000000'],
            ],
        ],
    ];

    // Define the columns to select, excluding sPassword
    $columns = "ID, FName, LName, emailAdd, Gender, dob, country, eduLevel, department, academic, statusActivity, registration_date"; // Exclude tPassword

    // Fetch data from the studentaccount table
    $sql = "SELECT $columns FROM teacheraccount WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
    $result = $conn->query($sql);

    $data = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Add table name as a header
    $sheet->setCellValue('A1', 'Table: Teacher Account Report');
    $rowNumber = 2;

    // Add column headings
    if (!empty($data)) {
        $columnNames = array_keys($data[0]);
        $columnIndex = 'A';
        foreach ($columnNames as $colName) {
            $sheet->setCellValue($columnIndex . $rowNumber, $colName);
            $columnIndex++;
        }

        // Apply border style to the header row
        $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);

        $rowNumber++;

        // Add data rows
        foreach ($data as $row) {
            $columnIndex = 'A';
            foreach ($row as $col) {
                $sheet->setCellValue($columnIndex . $rowNumber, $col);
                $columnIndex++;
            }

            // Apply border style to the data row
            $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);
            
            $rowNumber++;
        }
    } else {
        $sheet->setCellValue('A' . $rowNumber, 'No data found for the given date range.');
    }

    $conn->close();

    // Set the writer to output the spreadsheet
    $writer = new Xlsx($spreadsheet);
    $filename = 'TeacherAccount_Report_' . date('Ymd') . '.xlsx';

    // Set the header for downloading the file
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    // Write the file to the output
    $writer->save('php://output');
    exit;
    } elseif ($reportType == "evalQue") {
        // Handle Excel report for evaluation questions
        $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Define border style array
    $borderStyleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => Border::BORDER_THIN,
                'color' => ['argb' => '000000'],
            ],
        ],
    ];

    // Define the columns to select, excluding sPassword
    $columns = "QID, evaDetail, A, B, C, D, departQ, answer, registration_date";

    // Fetch data from the studentaccount table
    $sql = "SELECT $columns FROM evaluationque WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
    $result = $conn->query($sql);

    $data = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Add table name as a header
    $sheet->setCellValue('A1', 'Table: Evaluation Question Report');
    $rowNumber = 2;

    // Add column headings
    if (!empty($data)) {
        $columnNames = array_keys($data[0]);
        $columnIndex = 'A';
        foreach ($columnNames as $colName) {
            $sheet->setCellValue($columnIndex . $rowNumber, $colName);
            $columnIndex++;
        }

        // Apply border style to the header row
        $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);

        $rowNumber++;

        // Add data rows
        foreach ($data as $row) {
            $columnIndex = 'A';
            foreach ($row as $col) {
                $sheet->setCellValue($columnIndex . $rowNumber, $col);
                $columnIndex++;
            }

            // Apply border style to the data row
            $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);
            
            $rowNumber++;
        }
    } else {
        $sheet->setCellValue('A' . $rowNumber, 'No data found for the given date range.');
    }

    $conn->close();

    // Set the writer to output the spreadsheet
    $writer = new Xlsx($spreadsheet);
    $filename = 'Evaluation_Question_Report_' . date('Ymd') . '.xlsx';

    // Set the header for downloading the file
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    // Write the file to the output
    $writer->save('php://output');
    exit;
    } elseif ($reportType == "evalTeachAn") {
        // Handle Excel report for evaluation teacher answers
        $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Define border style array
    $borderStyleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => Border::BORDER_THIN,
                'color' => ['argb' => '000000'],
            ],
        ],
    ];

    // Define the columns to select, excluding sPassword
    $columns = "ID, teachEmail, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, registration_date";

    // Fetch data from the studentaccount table
    $sql = "SELECT $columns FROM teacherevaanswer WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
    $result = $conn->query($sql);

    $data = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Add table name as a header
    $sheet->setCellValue('A1', 'Table: Evaluated Teachers Answers Report');
    $rowNumber = 2;

    // Add column headings
    if (!empty($data)) {
        $columnNames = array_keys($data[0]);
        $columnIndex = 'A';
        foreach ($columnNames as $colName) {
            $sheet->setCellValue($columnIndex . $rowNumber, $colName);
            $columnIndex++;
        }

        // Apply border style to the header row
        $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);

        $rowNumber++;

        // Add data rows
        foreach ($data as $row) {
            $columnIndex = 'A';
            foreach ($row as $col) {
                $sheet->setCellValue($columnIndex . $rowNumber, $col);
                $columnIndex++;
            }

            // Apply border style to the data row
            $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);
            
            $rowNumber++;
        }
    } else {
        $sheet->setCellValue('A' . $rowNumber, 'No data found for the given date range.');
    }

    $conn->close();

    // Set the writer to output the spreadsheet
    $writer = new Xlsx($spreadsheet);
    $filename = 'Evaluated_Teachers_Answers_Report_' . date('Ymd') . '.xlsx';

    // Set the header for downloading the file
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    // Write the file to the output
    $writer->save('php://output');
    exit;
    } elseif ($reportType == "asQue") {
        // Handle Excel report for assignment questions
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Define border style array
        $borderStyleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];
    
        // Define the columns to select, excluding sPassword
        $columns = "AID, askerEmail, askerName, subjects, course, degree, course_code, deadln, question, statuss, solution_answer, solverEmail, solverUsername, studentFeedback, registration_date";
    
        // Fetch data from the studentaccount table
        $sql = "SELECT $columns FROM askedquestions WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
        $result = $conn->query($sql);
    
        $data = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
    
        // Add table name as a header
        $sheet->setCellValue('A1', 'Table: Asked Question Report');
        $rowNumber = 2;
    
        // Add column headings
        if (!empty($data)) {
            $columnNames = array_keys($data[0]);
            $columnIndex = 'A';
            foreach ($columnNames as $colName) {
                $sheet->setCellValue($columnIndex . $rowNumber, $colName);
                $columnIndex++;
            }
    
            // Apply border style to the header row
            $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);
    
            $rowNumber++;
    
            // Add data rows
            foreach ($data as $row) {
                $columnIndex = 'A';
                foreach ($row as $col) {
                    $sheet->setCellValue($columnIndex . $rowNumber, $col);
                    $columnIndex++;
                }
    
                // Apply border style to the data row
                $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);
                
                $rowNumber++;
            }
        } else {
            $sheet->setCellValue('A' . $rowNumber, 'No data found for the given date range.');
        }
    
        $conn->close();
    
        // Set the writer to output the spreadsheet
        $writer = new Xlsx($spreadsheet);
        $filename = 'Asked_Question_Report_' . date('Ymd') . '.xlsx';
    
        // Set the header for downloading the file
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
    
        // Write the file to the output
        $writer->save('php://output');
        exit;
    } elseif ($reportType == "upRes") {
        // Handle Excel report for uploaded resources
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Define border style array
        $borderStyleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
        ];
    
        // Define the columns to select, excluding sPassword
        $columns = "RID, title, descr, category, page_count, registration_date";
    
        // Fetch data from the studentaccount table
        $sql = "SELECT $columns FROM resources WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
        $result = $conn->query($sql);
    
        $data = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
    
        // Add table name as a header
        $sheet->setCellValue('A1', 'Table: Uploaded Resources Report');
        $rowNumber = 2;
    
        // Add column headings
        if (!empty($data)) {
            $columnNames = array_keys($data[0]);
            $columnIndex = 'A';
            foreach ($columnNames as $colName) {
                $sheet->setCellValue($columnIndex . $rowNumber, $colName);
                $columnIndex++;
            }
    
            // Apply border style to the header row
            $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);
    
            $rowNumber++;
    
            // Add data rows
            foreach ($data as $row) {
                $columnIndex = 'A';
                foreach ($row as $col) {
                    $sheet->setCellValue($columnIndex . $rowNumber, $col);
                    $columnIndex++;
                }
    
                // Apply border style to the data row
                $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);
                
                $rowNumber++;
            }
        } else {
            $sheet->setCellValue('A' . $rowNumber, 'No data found for the given date range.');
        }
    
        $conn->close();
    
        // Set the writer to output the spreadsheet
        $writer = new Xlsx($spreadsheet);
        $filename = 'Uploaded_Resources_Report_' . date('Ymd') . '.xlsx';
    
        // Set the header for downloading the file
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
    
        // Write the file to the output
        $writer->save('php://output');
        exit;
    } elseif ($reportType == "allD") {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // List of specific table names
    $tables = ['studentaccount', 'teacheraccount', 'evaluationque', 'teacherevaanswer', 'askedquestions', 'resources'];
    $rowNumber = 1;

    // Define border style array
    $borderStyleArray = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => Border::BORDER_THIN,
                'color' => ['argb' => '000000'],
            ],
        ],
    ];

    foreach ($tables as $tableName) {
        // Define the columns to select, excluding password columns
        $columns = "*";
        if ($tableName == 'studentaccount') {
            $columns = "ID, FName, LName, emailAdd, levelEdu, department, registration_date"; // Exclude sPassword
        } elseif ($tableName == 'teacheraccount') {
            $columns = "ID, FName, LName, emailAdd, Gender, dob, country, eduLevel, department, academic, statusActivity, registration_date"; // Exclude tPassword
        } elseif ($tableName == 'evaluationque') {
            $columns = "QID, evaDetail, A, B, C, D, departQ, answer, registration_date";
        } elseif ($tableName == 'teacherevaanswer') {
            $columns = "ID, teachEmail, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, registration_date";
        } elseif ($tableName == 'askedquestions') {
            $columns = "AID, askerEmail, askerName, subjects, course, degree, course_code, deadln, question, statuss, solution_answer, solverEmail, solverUsername, studentFeedback, registration_date";
        } elseif ($tableName == 'resources') {
            $columns = "RID, title, descr, category, page_count, registration_date";
        }

        // Fetch data from each table
        $sql = "SELECT $columns FROM $tableName WHERE registration_date BETWEEN '$date_from' AND '$date_to'";
        $result = $conn->query($sql);

        $data = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                unset($row['sPassword']); // Ensure sPassword is excluded
                unset($row['tPassword']); // Ensure tPassword is excluded
                $data[] = $row;
            }
        }

        // Add table name as a header
        $sheet->setCellValue('A' . $rowNumber, 'Table: ' . $tableName);
        $rowNumber++;

        // Add column headings
        if (!empty($data)) {
            $columnNames = array_keys($data[0]);
            $columnIndex = 'A';
            foreach ($columnNames as $colName) {
                $sheet->setCellValue($columnIndex . $rowNumber, $colName);
                $columnIndex++;
            }
            $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);
            $rowNumber++;

            // Add data rows
            foreach ($data as $row) {
                $columnIndex = 'A';
                foreach ($row as $col) {
                    $sheet->setCellValue($columnIndex . $rowNumber, $col);
                    $columnIndex++;
                }
                $sheet->getStyle('A' . $rowNumber . ':' . $columnIndex . $rowNumber)->applyFromArray($borderStyleArray);
                $rowNumber++;
            }
        } else {
            $sheet->setCellValue('A' . $rowNumber, 'No data found for the given date range.');
            $rowNumber++;
        }

        // Add a blank row between tables
        $rowNumber++;
    }

    $conn->close();

    // Set the writer to output the spreadsheet
    $writer = new Xlsx($spreadsheet);
    $filename = 'All_Reports_' . date('Ymd') . '.xlsx';

    // Set the header for downloading the file
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    // Write the file to the output
    $writer->save('php://output');
    exit;
    }
}
?>
