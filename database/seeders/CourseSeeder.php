<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * AI-generated courses data 
     */
    public function run()
    {
        Course::create([
            'title' => 'Introduction to Laravel',
            'description' => 'Learn the basics of Laravel framework.',
            'status' => 'Published',
            'is_premium' => false,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Advanced Laravel',
            'description' => 'Dive deep into Laravel for advanced users.',
            'status' => 'Pending',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Laravel with React.js',
            'description' => 'Build full-stack applications with Laravel and React.js.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Introduction to PHP',
            'description' => 'Start your web development journey with PHP.',
            'status' => 'Published',
            'is_premium' => false,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Mastering JavaScript',
            'description' => 'Become a JavaScript expert with this comprehensive course.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Vue.js Essentials',
            'description' => 'Learn the fundamentals of Vue.js for building modern web applications.',
            'status' => 'Pending',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Python for Beginners',
            'description' => 'An easy introduction to Python programming.',
            'status' => 'Published',
            'is_premium' => false,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Data Science with Python',
            'description' => 'Learn how to analyze and visualize data using Python.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Machine Learning Basics',
            'description' => 'Get started with machine learning using Python.',
            'status' => 'Pending',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'DevOps Fundamentals',
            'description' => 'Understand the basics of DevOps and continuous integration.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Cloud Computing with AWS',
            'description' => 'Learn how to use AWS for cloud computing solutions.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Cybersecurity Basics',
            'description' => 'Understand the essentials of cybersecurity and how to protect systems.',
            'status' => 'Pending',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Mobile App Development with Flutter',
            'description' => 'Build cross-platform mobile applications using Flutter.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Artificial Intelligence Concepts',
            'description' => 'An introduction to the basic concepts of artificial intelligence.',
            'status' => 'Pending',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Blockchain and Cryptocurrencies',
            'description' => 'Learn the fundamentals of blockchain technology and cryptocurrencies.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);

        Course::create([
            'title' => 'Full-Stack Development with MEAN Stack',
            'description' => 'Become a full-stack developer using MongoDB, Express.js, Angular, and Node.js.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'DevOps Fundamentals',
            'description' => 'Understand the basics of DevOps and continuous integration.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Cloud Computing with AWS',
            'description' => 'Learn how to use AWS for cloud computing solutions.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Cybersecurity Basics',
            'description' => 'Understand the essentials of cybersecurity and how to protect systems.',
            'status' => 'Pending',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Mobile App Development with Flutter',
            'description' => 'Build cross-platform mobile applications using Flutter.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Artificial Intelligence Concepts',
            'description' => 'An introduction to the basic concepts of artificial intelligence.',
            'status' => 'Pending',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Blockchain and Cryptocurrencies',
            'description' => 'Learn the fundamentals of blockchain technology and cryptocurrencies.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Full-Stack Development with MEAN Stack',
            'description' => 'Become a full-stack developer using MongoDB, Express.js, Angular, and Node.js.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Docker for Beginners',
            'description' => 'Learn the basics of Docker and containerization.',
            'status' => 'Published',
            'is_premium' => false,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Kubernetes Essentials',
            'description' => 'Understand the fundamentals of Kubernetes for container orchestration.',
            'status' => 'Pending',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Introduction to SQL',
            'description' => 'Learn the basics of SQL and relational databases.',
            'status' => 'Published',
            'is_premium' => false,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Advanced SQL Queries',
            'description' => 'Master complex SQL queries and database management.',
            'status' => 'Pending',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'React Native for Mobile Development',
            'description' => 'Build cross-platform mobile apps with React Native.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Internet of Things (IoT) Fundamentals',
            'description' => 'Learn the basics of IoT and how to build IoT applications.',
            'status' => 'Pending',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Big Data Analytics',
            'description' => 'Understand the principles of big data and how to analyze large datasets.',
            'status' => 'Published',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
        Course::create([
            'title' => 'Ethical Hacking',
            'description' => 'Learn the techniques of ethical hacking and penetration testing.',
            'status' => 'Pending',
            'is_premium' => true,
            'created_at' => now(),
            'deleted_at' => null,
        ]);
        
    }
}
