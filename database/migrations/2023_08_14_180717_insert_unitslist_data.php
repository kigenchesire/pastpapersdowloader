<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $units = [
            ['id' => 4, 'name' => 'Introduction To Computer Science', 'semester_id' => 5, 'slug' => 'COMP110', 'created_at' => null, 'updated_at' => null],
            ['id' => 5, 'name' => 'Fundamentals Of Programming', 'semester_id' => 5, 'slug' => 'COMP112', 'created_at' => null, 'updated_at' => null],
            ['id' => 6, 'name' => 'Basic Mathematics', 'semester_id' => 5, 'slug' => 'MATH110', 'created_at' => null, 'updated_at' => null],
            ['id' => 7, 'name' => 'Vector Geometry', 'semester_id' => 5, 'slug' => 'MATH111', 'created_at' => null, 'updated_at' => null],
            ['id' => 8, 'name' => 'Electricity and Magnetism', 'semester_id' => 5, 'slug' => 'PHY110', 'created_at' => null, 'updated_at' => null],
            ['id' => 9, 'name' => 'Old Testament Survey', 'semester_id' => 5, 'slug' => 'BIBL110', 'created_at' => null, 'updated_at' => null],
            ['id' => 16, 'name' => 'New Testament Survey', 'semester_id' => 6, 'slug' => 'BIBL120', 'created_at' => null, 'updated_at' => null],
            ['id' => 17, 'name' => 'Structure Programming', 'semester_id' => 6, 'slug' => 'COMP120', 'created_at' => null, 'updated_at' => null],
            ['id' => 18, 'name' => 'Calculus I', 'semester_id' => 6, 'slug' => 'MATH113', 'created_at' => null, 'updated_at' => null],
            ['id' => 20, 'name' => 'Basic Electronics', 'semester_id' => 6, 'slug' => 'PHY120', 'created_at' => null, 'updated_at' => null],
            ['id' => 21, 'name' => 'Introduction to Statistics', 'semester_id' => 6, 'slug' => 'MATH123', 'created_at' => null, 'updated_at' => null],
            ['id' => 22, 'name' => 'Communication Skills II', 'semester_id' => 6, 'slug' => 'COMS120', 'created_at' => null, 'updated_at' => null],
            ['id' => 23, 'name' => 'Communication Skills I', 'semester_id' => 5, 'slug' => 'COMS110', 'created_at' => null, 'updated_at' => null],
            ['id' => 24, 'name' => 'Structured Programming', 'semester_id' => 7, 'slug' => 'COMP120', 'created_at' => null, 'updated_at' => null],
            ['id' => 25, 'name' => 'Christian Ethics', 'semester_id' => 8, 'slug' => 'BIBL222', 'created_at' => null, 'updated_at' => null],
            ['id' => 26, 'name' => 'Digital Circuit', 'semester_id' => 7, 'slug' => 'COMP213', 'created_at' => null, 'updated_at' => null],
            ['id' => 27, 'name' => 'Data Communication', 'semester_id' => 8, 'slug' => 'COMP221', 'created_at' => null, 'updated_at' => null],
            ['id' => 28, 'name' => 'Data Structures With C', 'semester_id' => 7, 'slug' => 'COMP214', 'created_at' => null, 'updated_at' => null],
            ['id' => 29, 'name' => 'Object Oriented Programming with C++', 'semester_id' => 7, 'slug' => 'COMP215', 'created_at' => null, 'updated_at' => null],
            ['id' => 30, 'name' => 'Operating Systems', 'semester_id' => 7, 'slug' => 'COMP216', 'created_at' => null, 'updated_at' => null],
            ['id' => 32, 'name' => 'Assembly Language Programming', 'semester_id' => 8, 'slug' => 'COMP225', 'created_at' => null, 'updated_at' => null],
            ['id' => 33, 'name' => 'Object Oriented Programming with Java', 'semester_id' => 8, 'slug' => 'COMP226', 'created_at' => null, 'updated_at' => null],
            ['id' => 34, 'name' => 'Integral Calculus', 'semester_id' => 7, 'slug' => 'MATH121', 'created_at' => null, 'updated_at' => null],
            ['id' => 35, 'name' => 'Geometry and Linear Algebra', 'semester_id' => 7, 'slug' => 'MATH211', 'created_at' => null, 'updated_at' => null],
            ['id' => 36, 'name' => 'Ordinary Differential Equations', 'semester_id' => 8, 'slug' => 'MATH312', 'created_at' => null, 'updated_at' => null],
            ['id' => 37, 'name' => 'Introduction To Sociology', 'semester_id' => 8, 'slug' => 'SOCI100', 'created_at' => null, 'updated_at' => null],
            ['id' => 39, 'name' => 'Web Application Programming', 'semester_id' => 9, 'slug' => 'COMP310', 'created_at' => null, 'updated_at' => null],
              ['id' => 40, 'name' => 'Design Analysis and Algorithms', 'semester_id' => 9, 'slug' => 'COMP311', 'created_at' => null, 'updated_at' => null],
            ['id' => 41, 'name' => 'Computer Networks', 'semester_id' => 9, 'slug' => 'COMP312', 'created_at' => null, 'updated_at' => null],
            ['id' => 43, 'name' => 'Operations Research', 'semester_id' => 9, 'slug' => 'COMP315', 'created_at' => null, 'updated_at' => null],
            ['id' => 44, 'name' => 'Object Oriented Analysis and Design', 'semester_id' => 10, 'slug' => 'COMP320', 'created_at' => null, 'updated_at' => null],
            ['id' => 45, 'name' => 'Distributed Systems', 'semester_id' => 10, 'slug' => 'COMP322', 'created_at' => null, 'updated_at' => null],
            ['id' => 46, 'name' => 'Team Project', 'semester_id' => 10, 'slug' => 'COMP323', 'created_at' => null, 'updated_at' => null],
            ['id' => 47, 'name' => 'Database Management II', 'semester_id' => 10, 'slug' => 'COMP324', 'created_at' => null, 'updated_at' => null],
            ['id' => 48, 'name' => 'Research Methods in Computer Science', 'semester_id' => 10, 'slug' => 'COMP328', 'created_at' => null, 'updated_at' => null],
            ['id' => 49, 'name' => 'Visual Programming', 'semester_id' => 10, 'slug' => 'COMP329', 'created_at' => null, 'updated_at' => null],
            ['id' => 50, 'name' => 'Mobile Computing', 'semester_id' => 10, 'slug' => 'COMP340', 'created_at' => null, 'updated_at' => null],
            ['id' => 52, 'name' => 'Business Entrepreneurship', 'semester_id' => 9, 'slug' => 'BMGT214', 'created_at' => null, 'updated_at' => null],
            ['id' => 53, 'name' => 'Web Applications', 'semester_id' => 9, 'slug' => 'COMP310', 'created_at' => null, 'updated_at' => null],
            ['id' => 56, 'name' => 'Software Engineering', 'semester_id' => 9, 'slug' => 'COMP313', 'created_at' => null, 'updated_at' => null],
            ['id' => 64, 'name' => 'Numerical Analysis I', 'semester_id' => 9, 'slug' => 'MATH314', 'created_at' => null, 'updated_at' => null],
            ['id' => 65, 'name' => 'Computer Graphics', 'semester_id' => 11, 'slug' => 'COMP410', 'created_at' => null, 'updated_at' => null],
             ['id' => 66, 'name' => 'Artificial Intelligence', 'semester_id' => 11, 'slug' => 'COMP411', 'created_at' => null, 'updated_at' => null],
            ['id' => 67, 'name' => 'Micro Processor Based Systems', 'semester_id' => 11, 'slug' => 'COMP415', 'created_at' => null, 'updated_at' => null],
            ['id' => 68, 'name' => 'Rapid Application Development Tools', 'semester_id' => 12, 'slug' => 'COMP444', 'created_at' => null, 'updated_at' => null],
            ['id' => 69, 'name' => 'Professional Ethics and Information Law', 'semester_id' => 12, 'slug' => 'COMP420', 'created_at' => null, 'updated_at' => null],
            ['id' => 70, 'name' => 'Software Quality Management', 'semester_id' => 12, 'slug' => 'COMP421', 'created_at' => null, 'updated_at' => null],
            ['id' => 71, 'name' => 'User Interface Design', 'semester_id' => 11, 'slug' => 'COMP468', 'created_at' => null, 'updated_at' => null],
            ['id' => 72, 'name' => 'Client and Server Side Programming', 'semester_id' => 11, 'slug' => 'COMP440', 'created_at' => null, 'updated_at' => null],
            ['id' => 73, 'name' => 'Cryptocurrency', 'semester_id' => 11, 'slug' => 'COMP462', 'created_at' => null, 'updated_at' => null],
            ['id' => 74, 'name' => 'Hardware', 'semester_id' => 12, 'slug' => 'COMP455', 'created_at' => null, 'updated_at' => null],
            ['id' => 76, 'name' => 'Microprocessor', 'semester_id' => 12, 'slug' => 'COMP469', 'created_at' => null, 'updated_at' => null],
            ['id' => 77, 'name' => 'Telecommunications', 'semester_id' => 12, 'slug' => 'COMP467', 'created_at' => null, 'updated_at' => null],
            // ... add the rest of the data here
 


            // ... add the rest of the data here
            ['id' => 78, 'name' => 'Data Communication II', 'semester_id' => 12, 'slug' => 'COMP462', 'created_at' => null, 'updated_at' => null],
        ];

        foreach ($units as $unit) {
            DB::table('unitslist')->insert($unit);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
