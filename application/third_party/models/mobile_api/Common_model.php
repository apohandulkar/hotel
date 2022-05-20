<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model
{
    public $table1 = '';
    public $table2 = 'user';
    public $table3 = 'categories';
    public $table4 = 'event';
   
    
    /*function for make sure the  student id exists*/
    public function user_check($student_id)
    {
        $sql1 = "SELECT s.student_id FROM student s WHERE s.student_id ='".$student_id."'";
        $record = $this->db->query($sql1);
        if ($record->num_rows()>0) {
            return true;
        }   
    }  

    /*function for make sure the  teacher id exists*/
    public function teacher_check($teacher_id)
    {
        $sql1 = "SELECT t.teacher_id FROM teacher t WHERE t.teacher_id ='".$teacher_id."'";
        $record = $this->db->query($sql1);
        if ($record->num_rows()>0) {
            return true;
        }   
    }  

    /*function for make sure the  package id exists*/
    public function package_check($package_id)
    {
        $sql1 = "SELECT p.id FROM package p WHERE p.id ='".$package_id."'";
        $record = $this->db->query($sql1);
        if ($record->num_rows()>0) {
            return true;
        }   
    }  



    public function profile_detail($post_data)
    {
        $student_id =  $post_data['student_id'];
        $date = date("Y-m-d");
        $dateTime = date("Y-m-d H:i:s");
       // $sql = "SELECT s.student_id,s.firstname,s.lastname,s.email,s.gender,s.dob,s.address_1,s.address_2,s.state_code,s.zipcode,s.phone_no,s.city,s.profile_picture,s.latitude,s.longitude,s.device_token,s.add_to_calender,p.id as package_id,p.classes,p.validity,p.autorenew,p.price,sp.start_date,sp.end_date,(SELECT p.classes - COUNT(*) as remain FROM `student_classes` sc left join package pk ON sc.package_id = pk.id) as remaining_classes  FROM student s,package p,student_package sp WHERE s.student_id = sp.student_id and  sp.package_id = p.id and s.student_id = $student_id AND UNIX_TIMESTAMP(sp.end_date) > UNIX_TIMESTAMP('$date') GROUP BY  p.id";

        $sql = "SELECT s.student_id,s.firstname,s.lastname,s.email,s.gender,s.dob,s.address_1,s.address_2,s.state_code,s.zipcode,s.phone_no,s.city,s.profile_picture,s.latitude,s.longitude,s.device_token,s.add_to_calender,
            p.id as package_id,p.validity,p.autorenew,p.price,
            sp.id as student_package_id,sp.start_date as package_start_date,sp.end_date as package_end_date,p.classes as classes_allowed,


            (SELECT COUNT(*) FROM `student_classes` sc,class c where sp.package_id = p.id and sc.student_package_id= sp.id and sc.cancelled = 'No' AND sc.class_id = c.class_id AND UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`)) <= UNIX_TIMESTAMP('$dateTime')) as classes_taken,

            (SELECT COUNT(*) FROM `student_classes` sc where sc.student_package_id= sp.id  and sc.cancelled = 'No') as classes_requested

            
            FROM student s LEFT JOIN student_package sp ON  sp.student_id = s.student_id  AND UNIX_TIMESTAMP(sp.end_date) > UNIX_TIMESTAMP('$date') 

            LEFT JOIN package p on sp.package_id = p.id  
            WHERE s.student_id = $student_id GROUP BY sp.id ";

    //echo $sql;exit();
        return $this->db->query($sql)->result_array();
    }

    /*Function for update student profile*/
    public function updateProfile($post_data)
    {

        $student_id =  $post_data['student_id']; 
        
        $password = array_key_exists("password",$post_data);
        if($password){
            $post_data['password'] = do_hash($post_data['password']);

        }

        $profile_picture = array_key_exists("profile_picture",$post_data);
        if($profile_picture){
            $post_data['profile_picture'] = $_POST['profile_picture1'];    
        } 

        $post_data['updated_at'] = date('Y-m-d H:i:s');
        $query = $this->db->where('student_id',$student_id)->update('student', $post_data);        
        if($query){
            return $post_data;
        }
    }

    /* function for get classes count */
    public function count_classes_list($post_data)
    {
        $student_id = $post_data['student_id'];
        $date = date("Y-m-d H:i:s");
        $keyword = $post_data['keyword'];
        $latitude = $post_data['latitude'];
        $longitude = $post_data['longitude'];
        $filter = $post_data['filter']; //fav_teacher/location/date
        $sort = $post_data['sort']; //location/date
        $type =  $post_data['type']; // upcoming/past
        $fav_teacher = '';
        $teacher_id = $post_data['teacher_id'];
        if(!empty($teacher_id)){
            $teacher_id = "AND t.teacher_id =$teacher_id";
        }else{
            $teacher_id = '';
        }

        if(!empty($keyword)){
            $keyword = "AND (t.teacher_id LIKE '%$keyword%' OR t.firstname LIKE '%$keyword%' OR t.lastname LIKE '%$keyword%' OR t.email LIKE '%$keyword%' OR t.city LIKE '%$keyword%' OR c.date LIKE '%$keyword%' OR c.start_time LIKE '%$keyword%'
                OR c.duration LIKE '%$keyword%'  OR s.name LIKE '%$keyword%' OR l.name LIKE '%$keyword%' OR lc.name1 LIKE '%$keyword%'
                OR lc.name2 LIKE '%$keyword%' OR lc.address_1 LIKE '%$keyword%' OR lc.address_2 LIKE '%$keyword%')";
        }

        if(!empty($latitude) && !empty($longitude))
        {
            $distance_in_km = "( 6371 * acos( cos( radians($latitude) ) * cos( radians( lc.latitude) ) 
                * cos( radians( lc.longitude ) - radians($longitude) ) + 
                    sin( radians($latitude) ) * sin( radians( lc.latitude ) ) ) ) 
                AS distance_in_km";
        }

        if($sort == "location"){
            if(!empty($latitude) && !empty($longitude)){
                $sort_by = "ORDER BY distance_in_km";
            }else{
                $sort_by = "ORDER BY UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`))";
            }   
        }else if($sort == "date"){
            $sort_by = "ORDER BY UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`))";
        }else{
            $sort_by = "ORDER BY  UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`))";
        }

        if($filter == "fav_teacher"){
            $fav_teacher = "AND c.teacher_id IN (SELECT ft.teacher_id FROM favorite_teacher ft WHERE c.teacher_id = ft.teacher_id AND ft.student_id = $student_id)";
        }else{
            $sort_by = "ORDER BY  UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`))";
        }

        //upcoming and past for class schedule
        if($type  == "upcoming"){
            $type = "AND UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`)) >= UNIX_TIMESTAMP('$date') AND sp.student_id = $student_id AND sc.cancelled = 'No'";
        }
        else if($type  == "past"){
            $type = "AND UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`)) <= UNIX_TIMESTAMP('$date') AND sp.student_id = $student_id AND sc.cancelled = 'No'";
        }else{
            $type = "AND UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`)) >= UNIX_TIMESTAMP('$date') AND sc.cancelled = 'No'";
        }

        if (!empty($latitude) && !empty($longitude)) {

            $sql ="SELECT sp.id as student_package_id,p.id as package_id,c.class_id,c.date as class_date,c.start_time,c.duration,c.status,

                t.teacher_id,t.firstname,t.lastname,t.email,t.dob,t.gender,t.address_1,t.address_2,t.city,t.state_code,t.zipcode,t.country_code,t.phone_no,t.summary,t.about,t.role,t.profile_picture,

                s.name as class_style,l.name as class_level,lc.name1,lc.name2,lc.address_1,lc.address_2,lc.city,lc.zipcode,lc.capacity,lc.latitude,lc.longitude,

                ((SELECT ft.id FROM favorite_teacher ft WHERE ft.teacher_id = t.teacher_id)IS NOT NULL) AS favourite_flag,

                ((SELECT sc.id FROM student_classes sc WHERE sc.class_id = c.class_id AND sc.student_package_id = sp.id AND sp.student_id = $student_id )IS NOT NULL) AS class_booked_flag,

                 ((SELECT scl.id FROM student_classes scl WHERE scl.class_id = sc.class_id AND sp.student_id = $student_id AND scl.teacher_rate > 0 AND scl.location_rate > 0 )IS NOT NULL) as class_rated_flag,

                  $distance_in_km

                FROM student_package sp,student_classes sc,teacher t,package p,class c ,level l,style s,location lc

                WHERE sp.id = sc.student_package_id AND sc.class_id = c.class_id 

                AND c.teacher_id = t.teacher_id 
                AND c.location_id = lc.location_id AND c.level_id = l.level_id AND c.style_id = s.style_id


                 $keyword $fav_teacher $type $teacher_id GROUP BY c.class_id $sort_by";
        }else{
             $sql ="SELECT sp.id as student_package_id,p.id as package_id,c.class_id,c.date as class_date,c.start_time,c.duration,c.status,

                t.teacher_id,t.firstname,t.lastname,t.email,t.dob,t.gender,t.address_1,t.address_2,t.city,t.state_code,t.zipcode,t.country_code,t.phone_no,t.summary,t.about,t.role,t.profile_picture,

                s.name as class_style,l.name as class_level,lc.name1,lc.name2,lc.address_1,lc.address_2,lc.city,lc.zipcode,lc.capacity,lc.latitude,lc.longitude,

                ((SELECT ft.id FROM favorite_teacher ft WHERE ft.teacher_id = t.teacher_id AND ft.student_id = $student_id)IS NOT NULL) AS favourite_flag,

                ((SELECT sc.id FROM student_classes sc WHERE sc.class_id = c.class_id AND sc.student_package_id = sp.id AND sp.student_id = $student_id )IS NOT NULL) AS class_booked_flag,

                 ((SELECT scl.id FROM student_classes scl WHERE scl.class_id = sc.class_id AND sp.student_id = $student_id AND scl.teacher_rate > 0 AND scl.location_rate > 0 )IS NOT NULL) as class_rated_flag 

                FROM student_package sp,student_classes sc,teacher t,package p,class c ,level l,style s,location lc

                WHERE sp.id = sc.student_package_id AND sc.class_id = c.class_id 

                AND c.teacher_id = t.teacher_id 
                AND c.location_id = lc.location_id AND c.level_id = l.level_id AND c.style_id = s.style_id

                 $keyword $fav_teacher $type $teacher_id GROUP BY c.class_id $sort_by";
        }
//echo $sql;exit();
        $record = $this->db->query($sql);
        return $record->num_rows();
    }

    /* Function for get classes list */
    public function classes_list($post_data)
    {
        $student_id = $post_data['student_id'];
        $limit = $post_data['limit'];
        $offset = $post_data['offset'];        
        $date = date("Y-m-d H:i:s");
        $keyword = $post_data['keyword'];
        $latitude = $post_data['latitude'];
        $longitude = $post_data['longitude'];
        $filter = $post_data['filter']; //fav_teacher/location/date
        $sort = $post_data['sort']; //location/date
        $type =  $post_data['type']; // upcoming/past
        $fav_teacher = '';

        $teacher_id = $post_data['teacher_id'];
        if(!empty($teacher_id)){
            $teacher_id = "AND t.teacher_id =$teacher_id";
        }else{
            $teacher_id = '';
        }

        if(!empty($keyword)){
            $keyword = "AND (t.teacher_id LIKE '%$keyword%' OR t.firstname LIKE '%$keyword%' OR t.lastname LIKE '%$keyword%' OR t.email LIKE '%$keyword%' OR t.city LIKE '%$keyword%' OR c.date LIKE '%$keyword%' OR c.start_time LIKE '%$keyword%'
                OR c.duration LIKE '%$keyword%'  OR s.name LIKE '%$keyword%' OR l.name LIKE '%$keyword%' OR lc.name1 LIKE '%$keyword%'
                OR lc.name2 LIKE '%$keyword%' OR lc.address_1 LIKE '%$keyword%' OR lc.address_2 LIKE '%$keyword%')";
        }

        if(!empty($latitude) && !empty($longitude))
        {
            $distance_in_km = "( 6371 * acos( cos( radians($latitude) ) * cos( radians( lc.latitude) ) 
                * cos( radians( lc.longitude ) - radians($longitude) ) + 
                    sin( radians($latitude) ) * sin( radians( lc.latitude ) ) ) ) 
                AS distance_in_km";
        }

        if(!empty($sort)){
            if($sort == "location"){
                if(!empty($latitude) && !empty($longitude)){
                    $sort_by = "ORDER BY distance_in_km";
                }else{
                    $sort_by = "ORDER BY UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`))";
                }   
            }else if($sort == "date"){
                $sort_by = "ORDER BY UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`))";
            }else{
                $sort_by = "ORDER BY  UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`))";
            }
        }
        



        if($filter == "fav_teacher"){
            $fav_teacher = "AND c.teacher_id IN (SELECT ft.teacher_id FROM favorite_teacher ft WHERE c.teacher_id = ft.teacher_id AND ft.student_id = $student_id)";
        }else{
            $sort_by = "ORDER BY  UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`))";
        }

        if($type  == "upcoming"){
            $type = "AND UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`)) >= UNIX_TIMESTAMP('$date') AND sp.student_id = $student_id AND sc.cancelled = 'No'";
        }
        else if($type  == "past"){
            $type = "AND UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`)) <= UNIX_TIMESTAMP('$date') AND sp.student_id = $student_id AND sc.cancelled = 'No'";
        }else{
            $type = "AND UNIX_TIMESTAMP(CONCAT(`date`,' ',`start_time`)) >= UNIX_TIMESTAMP('$date') AND sc.cancelled = 'No'";
        }

        if (!empty($latitude) && !empty($longitude)) {
             $sql ="SELECT sp.id as student_package_id,p.id as package_id,c.class_id,c.date as class_date,c.start_time,c.duration,c.status,

                t.teacher_id,t.firstname,t.lastname,t.email,t.dob,t.gender,t.address_1,t.address_2,t.city,t.state_code,t.zipcode,t.country_code,t.phone_no,t.summary,t.about,t.role,t.profile_picture,

                s.name as class_style,l.name as class_level,lc.name1,lc.name2,lc.address_1,lc.address_2,lc.city,lc.zipcode,lc.capacity,lc.latitude,lc.longitude,

                ((SELECT ft.id FROM favorite_teacher ft WHERE ft.teacher_id = t.teacher_id)IS NOT NULL) AS favourite_flag,

                ((SELECT sc.id FROM student_classes sc WHERE sc.class_id = c.class_id AND sc.student_package_id = sp.id AND sp.student_id = $student_id )IS NOT NULL) AS class_booked_flag,

                 ((SELECT scl.id FROM student_classes scl WHERE scl.class_id = sc.class_id AND sp.student_id = $student_id AND scl.teacher_rate > 0 AND scl.location_rate > 0 )IS NOT NULL) as class_rated_flag,

                  $distance_in_km

                FROM student_package sp,student_classes sc,teacher t,package p,class c ,level l,style s,location lc

                WHERE sp.id = sc.student_package_id AND sc.class_id = c.class_id 

                AND c.teacher_id = t.teacher_id 
                AND c.location_id = lc.location_id AND c.level_id = l.level_id AND c.style_id = s.style_id


                 $keyword $fav_teacher $type $teacher_id GROUP BY c.class_id $sort_by LIMIT $offset, $limit";



         /*   $sql ="SELECT sp.id as student_package_id,p.id as package_id,c.class_id,c.date as class_date,c.start_time,c.duration,c.status,t.*,s.name as class_style,l.name as class_level,lc.name1,lc.name2,lc.address_1,lc.address_2,lc.city,lc.zipcode,lc.capacity,lc.latitude,lc.longitude,((SELECT ft.id FROM favorite_teacher ft WHERE ft.teacher_id = c.teacher_id AND ft.student_id = $student_id)IS NOT NULL) AS favourite_flag,
                ((SELECT scl.id FROM student_classes scl WHERE scl.class_id = c.class_id AND sp.package_id = p.id AND scl.student_package_id = sp.id AND scl.teacher_rate > 0 AND scl.location_rate > 0 )IS NOT NULL) as class_rated_flag, 
                $distance_in_km FROM class c, level l,style s,location lc, teacher t,student_classes scl,package p,student_package sp WHERE c.teacher_id = t.teacher_id AND c.location_id = lc.location_id AND c.level_id = l.level_id AND c.style_id = s.style_id

                AND scl.class_id = c.class_id AND sp.package_id = p.id AND scl.student_package_id = sp.id

                $keyword $fav_teacher $type $teacher_id GROUP BY c.class_id $sort_by LIMIT $offset, $limit";
        */
        }else{
            $sql ="SELECT sp.id as student_package_id,p.id as package_id,c.class_id,c.date as class_date,c.start_time,c.duration,c.status,

                t.teacher_id,t.firstname,t.lastname,t.email,t.dob,t.gender,t.address_1,t.address_2,t.city,t.state_code,t.zipcode,t.country_code,t.phone_no,t.summary,t.about,t.role,t.profile_picture,

                s.name as class_style,l.name as class_level,lc.name1,lc.name2,lc.address_1,lc.address_2,lc.city,lc.zipcode,lc.capacity,lc.latitude,lc.longitude,

                ((SELECT ft.id FROM favorite_teacher ft WHERE ft.teacher_id = t.teacher_id AND ft.student_id = $student_id)IS NOT NULL) AS favourite_flag,

                ((SELECT sc.id FROM student_classes sc WHERE sc.class_id = c.class_id AND sc.student_package_id = sp.id AND sp.student_id = $student_id )IS NOT NULL) AS class_booked_flag,

                 ((SELECT scl.id FROM student_classes scl WHERE scl.class_id = sc.class_id AND sp.student_id = $student_id AND scl.teacher_rate > 0 AND scl.location_rate > 0 )IS NOT NULL) as class_rated_flag 

                FROM student_package sp,student_classes sc,teacher t,package p,class c ,level l,style s,location lc

                WHERE sp.id = sc.student_package_id AND sc.class_id = c.class_id 

                AND c.teacher_id = t.teacher_id 
                AND c.location_id = lc.location_id AND c.level_id = l.level_id AND c.style_id = s.style_id

                 $keyword $fav_teacher $type $teacher_id GROUP BY c.class_id $sort_by LIMIT $offset, $limit";

           /*  $sql ="SELECT sp.id as student_package_id,p.id as package_id,c.class_id,c.date as class_date,c.start_time,c.duration,c.status,t.*,s.name as class_style,l.name as class_level,lc.name1,lc.name2,lc.address_1,lc.address_2,lc.city,lc.zipcode,lc.capacity,lc.latitude,lc.longitude,((SELECT ft.id FROM favorite_teacher ft WHERE ft.teacher_id = c.teacher_id AND ft.student_id = $student_id)IS NOT NULL) AS favourite_flag,
                 ((SELECT scl.id FROM student_classes scl WHERE scl.class_id = c.class_id AND sp.package_id = p.id AND scl.student_package_id = sp.id AND scl.teacher_rate > 0 AND scl.location_rate > 0 )IS NOT NULL) as class_rated_flag 
                 FROM class c, level l,style s,location lc, teacher t,student_classes scl,package p,student_package sp WHERE c.teacher_id = t.teacher_id AND c.location_id = lc.location_id AND c.level_id = l.level_id AND c.style_id = s.style_id

                 AND scl.class_id = c.class_id AND sp.package_id = p.id AND scl.student_package_id = sp.id

                 $keyword $fav_teacher $type $teacher_id GROUP BY c.class_id $sort_by LIMIT $offset, $limit";

            */
        }
//echo $sql;exit();
        $record = $this->db->query($sql);
        if ($record->num_rows() > 0)
        {
            return $record->result_array();
        }
    }


    /* Function for get Teachers list */
    public function count_teachers_list($post_data)
    {
        $student_id = $post_data['student_id'];              
        $date = date("Y-m-d H:i:s");
        $keyword = $post_data['keyword'];
        $latitude = $post_data['latitude'];
        $longitude = $post_data['longitude'];
        $filter = $post_data['filter']; //fav_teacher/all
       // $type =  $post_data['type']; // upcoming/past
        $fav_teacher = '';

        if(!empty($keyword)){
            $keyword = "AND (t.firstname LIKE '%$keyword%' OR t.lastname LIKE '%$keyword%' OR t.email LIKE '%$keyword%')";
        }

        if(!empty($latitude) && !empty($longitude))
        {
            $distance_in_km = "( 6371 * acos( cos( radians($latitude) ) * cos( radians( lc.latitude) ) 
                * cos( radians( lc.longitude ) - radians($longitude) ) + 
                    sin( radians($latitude) ) * sin( radians( lc.latitude ) ) ) ) 
                AS distance_in_km";
        }

          
       if($filter == "fav_teacher"){
            $fav_teacher = "AND c.teacher_id IN (SELECT ft.teacher_id FROM favorite_teacher ft WHERE c.teacher_id = ft.teacher_id AND ft.student_id = $student_id)";
        }
        if($filter == "all"){
            $fav_teacher = "";
        }


        if (!empty($latitude) && !empty($longitude)) {

            $sql ="SELECT t.teacher_id,t.firstname,t.lastname,t.email,t.dob,t.gender,t.address_1,t.address_2,t.city,t.state_code,t.zipcode,t.country_code,t.phone_no,t.summary,t.about,t.role,t.profile_picture,c.class_id,AVG(stc.teacher_rate)as teacher_avg_rate, count(*) as no_of_student_rate,(SELECT AVG(stc.teacher_rate) - AVG(stc.teacher_rate)/SQRT(count(*))  FROM student_classes stc WHERE stc.class_id = c.class_id ) as calculated_rate,((SELECT ft.id FROM favorite_teacher ft WHERE ft.teacher_id = c.teacher_id AND ft.student_id = $student_id)IS NOT NULL) AS favourite_flag,$distance_in_km FROM teacher t,class c,student_classes stc WHERE t.teacher_id = c.teacher_id AND stc.class_id = c.class_id $fav_teacher $keyword GROUP BY t.teacher_id ORDER BY calculated_rate DESC,CONCAT(`firstname`,' ',`lastname`) ASC";
        }else{
             $sql ="SELECT t.teacher_id,t.firstname,t.lastname,t.email,t.dob,t.gender,t.address_1,t.address_2,t.city,t.state_code,t.zipcode,t.country_code,t.phone_no,t.summary,t.about,t.role,t.profile_picture,c.class_id,AVG(stc.teacher_rate)as teacher_avg_rate, count(*) as no_of_student_rate,(SELECT AVG(stc.teacher_rate) - AVG(stc.teacher_rate)/SQRT(count(*))  FROM student_classes stc WHERE stc.class_id = c.class_id ) as calculated_rate,((SELECT ft.id FROM favorite_teacher ft WHERE ft.teacher_id = c.teacher_id AND ft.student_id = $student_id)IS NOT NULL) AS favourite_flag FROM teacher t,class c,student_classes stc WHERE t.teacher_id = c.teacher_id AND stc.class_id = c.class_id   $fav_teacher $keyword GROUP BY t.teacher_id ORDER BY calculated_rate DESC,CONCAT(`firstname`,' ',`lastname`) ASC";
        }

        $record = $this->db->query($sql);
        return $record->num_rows();
    }

    /* Function for get Teachers list */
    public function teachers_list($post_data)
    {
        $student_id = $post_data['student_id'];
        $limit = $post_data['limit'];
        $offset = $post_data['offset'];        
        $date = date("Y-m-d H:i:s");
        $keyword = $post_data['keyword'];
        $latitude = $post_data['latitude'];
        $longitude = $post_data['longitude'];
        $filter = $post_data['filter']; //fav_teacher/all
       // $type =  $post_data['type']; // upcoming/past
        $fav_teacher = '';

        if(!empty($keyword)){
            $keyword = "AND (t.firstname LIKE '%$keyword%' OR t.lastname LIKE '%$keyword%' OR t.email LIKE '%$keyword%')";
        }

        if(!empty($latitude) && !empty($longitude))
        {
            $distance_in_km = "( 6371 * acos( cos( radians($latitude) ) * cos( radians( lc.latitude) ) 
                * cos( radians( lc.longitude ) - radians($longitude) ) + 
                    sin( radians($latitude) ) * sin( radians( lc.latitude ) ) ) ) 
                AS distance_in_km";
        }

          
       if($filter == "fav_teacher"){
            $fav_teacher = "AND c.teacher_id IN (SELECT ft.teacher_id FROM favorite_teacher ft WHERE c.teacher_id = ft.teacher_id AND ft.student_id = $student_id)";
        }
        if($filter == "all"){
            $fav_teacher = "";
        }


        if (!empty($latitude) && !empty($longitude)) {

            $sql ="SELECT t.teacher_id,t.firstname,t.lastname,t.email,t.dob,t.gender,t.address_1,t.address_2,t.city,t.state_code,t.zipcode,t.country_code,t.phone_no,t.summary,t.about,t.role,t.profile_picture,c.class_id,AVG(stc.teacher_rate)as teacher_avg_rate, count(*) as no_of_student_rate,(SELECT AVG(stc.teacher_rate) - AVG(stc.teacher_rate)/SQRT(count(*))  FROM student_classes stc WHERE stc.class_id = c.class_id ) as calculated_rate,((SELECT ft.id FROM favorite_teacher ft WHERE ft.teacher_id = c.teacher_id AND ft.student_id = $student_id)IS NOT NULL) AS favourite_flag,$distance_in_km FROM teacher t,class c,student_classes stc WHERE t.teacher_id = c.teacher_id AND stc.class_id = c.class_id $fav_teacher $keyword GROUP BY t.teacher_id ORDER BY calculated_rate DESC,CONCAT(`firstname`,' ',`lastname`) ASC LIMIT $offset, $limit";
        }else{
             $sql ="SELECT t.teacher_id,t.firstname,t.lastname,t.email,t.dob,t.gender,t.address_1,t.address_2,t.city,t.state_code,t.zipcode,t.country_code,t.phone_no,t.summary,t.about,t.role,t.profile_picture,c.class_id,AVG(stc.teacher_rate)as teacher_avg_rate, count(*) as no_of_student_rate,(SELECT AVG(stc.teacher_rate) - AVG(stc.teacher_rate)/SQRT(count(*))  FROM student_classes stc WHERE stc.class_id = c.class_id ) as calculated_rate,((SELECT ft.id FROM favorite_teacher ft WHERE ft.teacher_id = c.teacher_id AND ft.student_id = $student_id)IS NOT NULL) AS favourite_flag FROM teacher t,class c,student_classes stc WHERE t.teacher_id = c.teacher_id AND stc.class_id = c.class_id   $fav_teacher $keyword GROUP BY t.teacher_id ORDER BY calculated_rate DESC,CONCAT(`firstname`,' ',`lastname`) ASC LIMIT $offset, $limit";
        }

        $record = $this->db->query($sql);
        if ($record->num_rows() > 0)
        {
            return $record->result_array();
        }
    }

    public function teacher_detail($post_data)
    {
        $teacher_id =  $post_data['teacher_id'];
        $date = date("Y-m-d");
        $sql = "SELECT t.*,c.class_id,AVG(stc.teacher_rate)as teacher_avg_rate, count(*) as no_of_student_rate,(SELECT AVG(stc.teacher_rate) - AVG(stc.teacher_rate)/SQRT(count(*))  FROM student_classes stc WHERE stc.class_id = c.class_id ) as calculated_rate,((SELECT ft.id FROM favorite_teacher ft WHERE ft.teacher_id = c.teacher_id AND ft.teacher_id = $teacher_id)IS NOT NULL) AS favourite_flag FROM teacher t,class c,student_classes stc WHERE t.teacher_id = c.teacher_id AND stc.class_id = c.class_id AND t.teacher_id = $teacher_id GROUP BY t.teacher_id";
    //echo $sql;exit();
        return $this->db->query($sql)->result_array();
    }

    /* Check the package is active then user cant buy it */
    public function is_package_active($student_id){
        $date = date("Y-m-d");
       
        $sql = "SELECT sp.* FROM student_package sp,package p WHERE student_id = 
                $student_id AND sp.package_id = p.id 
                 AND ((UNIX_TIMESTAMP(end_date) > UNIX_TIMESTAMP('$date')) OR (UNIX_TIMESTAMP(end_date) > UNIX_TIMESTAMP('$date') AND p.classes >= (SELECT COUNT(*) FROM student_classes sc WHERE sp.id = sc.student_package_id AND sc.cancelled = 'No')) ) ORDER BY sp.id desc limit 1"; 

        $record = $this->db->query($sql);
        if ($record->num_rows() > 0)
        {
            return true;
        }

    }

    /* Function for insert data into student_package table while student buy package */
    public function buy_package($post_data){
        $student_id = $post_data['student_id']; 
        $package_id = $post_data['package_id'];
        $date = date("Y-m-d");
        $start_date = $date;
        $end_date = date('Y-m-d', strtotime("+2 months"));

        $classes_allowed = "SELECT p.classes FROM package p WHERE p.id=$package_id";
        $record = $this->db->query($classes_allowed);
        if ($record->num_rows() > 0)
        {
            $classes_allowed = $record->row('classes');

        }else{
            $classes_allowed = 0;
        }

        

        $data = array('student_id' => $student_id, 
                      'package_id' => $package_id,
                      'start_date' => $start_date,
                      'end_date' => $end_date,
                      'classes_allowed' =>$classes_allowed
                );
        //print_r($data);exit();
       if($this->db->insert('student_package', $data))
       {              
            return $this->db->insert_id();
       }  
       else{
            return false;
        }
    }

    /* Function for do payment when buy the package */
    public function do_payment($post_data){
        $student_package_id = $post_data['student_package_id']; //its a row id of student_package table
        $transaction_id = $post_data['transaction_id'];
        $payment = $post_data['payment'];

        $data = array('student_package_id' => $student_package_id,
                      'transaction_id' => $transaction_id,
                      'payment' => $payment
                     );
        
        return $this->db->insert('student_payment', $data);

    }

    /* Function for checking package is active for class or not */    
    public function is_package_active_for_class($student_id,$package_id,$post_data){
        $date = date("Y-m-d");
        $type = $post_data['type'];
        if(!empty($type)){
            if($type == "cancelled"){
                $comparison = ">="; // for end_date is today we can cancle the class
            }
            if($type == "book"){
                $comparison = ">";
            }
        }else{
            $comparison = ">";
        }

        $sql = "SELECT sp.* FROM student_package sp,package p WHERE sp.student_id = 
                $student_id AND sp.package_id = p.id 
                 AND ((UNIX_TIMESTAMP(end_date) > UNIX_TIMESTAMP('$date') AND p.classes $comparison (SELECT COUNT(*) FROM student_classes sc WHERE sp.id = sc.student_package_id AND sc.cancelled = 'No')) ) ORDER BY sp.id desc limit 1"; 
        //echo $sql;exit();
        $record = $this->db->query($sql);
        if ($record->num_rows() > 0)
        {
            return true;
        }

    }
    /* Function for book or cancle class */
    public function book_class($post_data){
        $student_id = $post_data['student_id'];
        $package_id = $post_data['package_id'];
        $student_package_id = "SELECT sp.id FROM student_package sp WHERE sp.student_id=$student_id AND sp.package_id=$package_id ORDER BY sp.id DESC LIMIT 1";

        $record = $this->db->query($student_package_id);
        if ($record->num_rows() > 0)
        {
            $student_package_id = $record->row('id');
           // return $record->row('id');
            $class_id = $post_data['class_id'];
            $type = $post_data['type']; //cancelled/book

            $data = array('student_package_id' => $student_package_id,
                          'class_id' => $class_id
                         );
            if(!empty($type)){
                if($type == "cancelled"){
                    $this->db->where('student_package_id', $student_package_id);
                    $this->db->where('class_id', $class_id);
                    
                    $cancelled = array("cancelled"=> 'Yes',"updated_at"=> date('Y-m-d H:i:s'));
                    $_POST['message'] = 'Class cancelled successfully';
                    return $this->db->update('student_classes', $cancelled);
                }
                if($type == "book"){                    
                    //check class is cancelled then student can book it again
                    $check_class_is_cancled = "SELECT sc.id FROM student_classes sc WHERE sc.student_package_id=$student_package_id AND sc.class_id=$class_id AND sc.cancelled = 'Yes' ";

                    $record1 = $this->db->query($check_class_is_cancled);
                    if ($record1->num_rows() > 0)
                    {   
                        $student_classes_id = $record1->row('id');
                        $this->db->where('id', $student_classes_id);
                        $cancelled1 = array("cancelled"=> 'No',"updated_at"=> date('Y-m-d H:i:s'));

                        $_POST['message'] = 'Class booked successfully';
                        return $this->db->update('student_classes', $cancelled1);
                    }else{
                        //check class is already book
                        $check_class_is_booked = "SELECT sc.id FROM student_classes sc WHERE sc.student_package_id=$student_package_id AND sc.class_id=$class_id";
                        $record2 = $this->db->query($check_class_is_booked);
                        if($record2->num_rows() > 0){
                            $_POST['message'] = 'Class is already booked';
                            return false;
                        }else{
                             $_POST['message'] = 'Class booked successfully';
                            return $this->db->insert('student_classes', $data);
                        }                        
                    }                    
                }
            }
        }else{
            return false;
        }
        
    }


    /* Function for favourite and unfavourite teacher */
    public function favourite_teacher($post_data) {
        $student_id = $post_data['student_id'];
        $teacher_id = $post_data['teacher_id'];
        $this->db->select('*');
        $this->db->from('favorite_teacher');
        $this->db->where('student_id', $student_id);
        $this->db->where('teacher_id', $teacher_id);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            $data = array(
                'student_id' => $student_id,
                'teacher_id' => $teacher_id
            );
             $q = $this->db->insert('favorite_teacher', $data);
             if($q){
                return "inserted";
             }   

        }else{
            $this->db->where('student_id', $student_id);
            $this->db->where('teacher_id', $teacher_id);
            $q = $this->db->delete('favorite_teacher');
            if($q){
                return "deleted";
            }
        }

    }

    /* Function for do rating to class */
    public function do_rate($post_data){
        $student_package_id = $post_data['student_package_id'];
        $class_id = $post_data['class_id'];
        $teacher_rate = $post_data['teacher_rate'];
        $location_rate = $post_data['location_rate'];
        $comment = $post_data['comment'];
        if(!empty($comment)){
            $comment = $comment;
        }else{
            $comment = "";
        }

        $data = array('teacher_rate' => $teacher_rate,
                      'location_rate' => $location_rate,
                      'comment' => $comment
                     );

        $this->db->where('student_package_id', $student_package_id);
        $this->db->where('class_id', $class_id);
        return $this->db->update('student_classes', $data);
    }



}?>