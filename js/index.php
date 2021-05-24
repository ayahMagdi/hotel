
<?php 

$conn = mysqli_connect("localhost","root","root","schoolsinfo");

if(!$conn){
	echo 'Error: ' = mysqli_connect_error();
}


$firstName      =   $_POST['firstName'];
$lastName       =   $_POST['lastName'];
$email          =   $_POST['email'];


if(isset($_POST['submit'])){
	
   $sql = "INSeRT INTO users(firstName , lastName , email) 
          VALUES ('$firstName ' , '$lastName ' , '$email') ";
  
     
     mysqli_query($conn , $sql);

}

?>




<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Aya Magdy">
	<meta name="description" content="مدارس مصر الخاصه">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>My Project</title>
</head>
<body>

	 <!-- start navbar -->
     

		<nav class="navbar navbar-light ">
		  <div class="container">
		    <a class="navbar-brand text-md-right text-center" href="#">
		      <h1 class="title">مدرستي
		         <img src="imgs/7.png" alt="" width="65" height="70" class="d-inline-block align-text-top">
		      </h1>
		    </a>
		  </div>
		</nav>


	 <!-- end navbar -->

    <!-- start header -->


	   <div class="header text-right">
		    <div class="container">
			      <div class="header-content">
				    	<h2 class="header-title">ما هي المدارس الخاصة؟</h2>
				    	<p class="header-description">هي مدارس تُنشئها جهات خاصة وتمويلها من خلال المصروفات والرسوم الخاصة بالطلاب، وهذا ما يجعل مصروفاتها أعلى بكثير من المدارس الحكومية حيث تبدأ من 4,000 جنيه وقد تصل حتى 40,000 جنيه، ولكن على الجانب الآخر نجد أن مرافقها ووسائل التكنولوجيا فيها أفضل بكثير.</p>
				    	<p class="header-description">بما أن المدارس الخاصة ليست تابعة لأي جهة حكومية، نجد أن إدارة المدرسة مسؤولة بالكامل عنها وبالتالي يقع على كاهلها عبء تحديد معايير قبول الطلاب وتوظيف المعلمين بالإضافة إلى وضع المناهج الخاصة بها.</p>
			      </div>
			      <div class="header-content">	
				    	<h2 class="header-title">مميزات المدارس الخاصة</h2>
                        <ul class="header-list list-unstyled">
                        	<li>يتم إدارتها بالكامل من قبل هيئة خاصة.</li>
                        	<li>التكنولوجيا العالية والمرافق المناسبة للاستخدام الآدمي.</li>
                        	<li>كثافة الفصل أقل بكثير من المدارس الحكومية.</li>
                        	<li>تمويلها من خلال الرسوم الخاصة بالطلاب.</li>
                        	<li>تطوير مناهجها باستمرار لتصبح معاصرة لتطورات العصر.</li>
                        	<li>ارتفاع رواتب المعلمين.</li>
                        	<li>تعتمد في منهجها على التبسيط والشرح والفهم، من أجل تنمية الإبداع عند الطلاب.</li>
                        	<li>تهتم باللغة الإنجليزية بشكل أساسي.</li>
                        </ul>
			     </div>
			      <div class="header-content">	
				    	<h2 class="header-title">عيوب المدارس الخاصة</h2>
                        <ul class="header-list list-unstyled">
                        	<li>ليس لها منهج معين، بل تضع كل مدرسة منهجها.</li>
                        	<li>رسوم الدراسة بها عالية جدًا لا تناسب متوسطي ومعدومي الدخل.</li>
                        	<li>المعلم فيها ليس بالضرورة مؤهلًا للعمل في المدرسة الحكومية.</li>
                        	<li>تهمل اللغة العربية بشكل كبير.</li>
                        	<li>تحتاج لمصاريف أكثر في الأدوات المدرسية والكتب وغيرها.</li>
                        	<li>لا يمكن الاستغناء عن الدروس الخصوصية بجانبها.</li>
                        </ul>
			    </div>
		   </div>
	   </div>

	<!-- end header -->

	<!-- start schools information -->
   
   <hr>

    <div class="schools-information">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-right" style="width: 18rem;">
						  <img src="imgs/canadian.jpg" class="card-img-top" alt="المدرسة الكندية">
						  <div class="card-body">
						    <h5 class="card-title">المدرسة الكندية</h5>
						    <p class="card-text text-center">تكرس المدرسة الكندية الدولية في مصر للعمل بالشراكة مع أولياء الأمور والطلاب لتوفير بيئة تعليمية وتعليمية على مستوى عالمي لتطوير الطلاب كمواطنين مستعدين ومطلعين وخلاقين ومهتمين بمجتمع عالمي.</p>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p><i class="fa fa-phone"></i>الموبايل: <span> 0225418136, 01066663313 </span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-address-card"></i>العنوان:<span> التجمع الخامس، المنطقة الرابعة </span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-credit-card"></i>مصاريف العام:<span> المرحلة الاعدادية 130, الثانوية 136الف</span></p>
						    </li>
						  </ul>
						  <div class="card-body text-center">
						    <a href="http://cise-egypt.com/" class="card-link at">
						    	<i class="fa fa-at"></i>
						    </a>
						    <a href="https://www.facebook.com/CISIANS" class="card-link facebook">
						    	<i class="fa fa-facebook"></i>
						    </a>
						    <a href="https://www.instagram.com/explore/locations/224026773/" class="card-link instagram">
						    	<i class="fa fa-instagram"></i>
						    </a>
						  </div>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-right" style="width: 18rem;">
						  <img src="imgs/elwahat.jpg" class="card-img-top" alt="مدرسة الواحه">
						  <div class="card-body">
						    <h5 class="card-title">مدارس الواحة الدولية</h5>
						    <p class="card-text text-center">مدرسة الواحة للغات تتركز علي توفير بيئة آمنة وفكرية مليئة بالتحديات من شأنها تمكين الطلاب من أن يصبحوا مفكرين مبتكرين ، ومحللين مبدعين للمشاكل ، ومتعلمين مستلهمين مستعدين للنمو في القرن الحادي والعشرين.</p>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p><i class="fa fa-phone"></i>الموبايل: <span> 27298004 , 27298009 </span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-address-card"></i>العنوان:<span> الحي التاني, الهضبه الوسطي , المقطم</span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-credit-card"></i>مصاريف العام:<span> الشهاده المصرية 12 الف</span></p>
						    </li>
						  </ul>
						  <div class="card-body text-center">
						    <a href="https://www.google.com/maps/place/29.999710953805494,31.29370808601402" class="card-link at">
						    	<i class="fa fa-at"></i>
						    </a>
						    <a href="https://www.facebook.com/alwahainternationalschool/" class="card-link facebook">
						    	<i class="fa fa-facebook"></i>
						    </a>
						    <a href="https://www.instagram.com/explore/locations/291889203/al-waha-international-school?hl=en" class="card-link instagram">
						    	<i class="fa fa-instagram"></i>
						    </a>
						  </div>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-right" style="width: 18rem;">
						  <img src="imgs/eas.jpg" class="card-img-top" alt="المدرسة الامريكية">
						  <div class="card-body">
						    <h5 class="card-title">المدرسة الامريكية بالاسكندرية</h5>
						    <p class="card-text text-center">تقدم المدرسة الأمريكية منهج الأمريكي للصفوف حتى الصف الثاني عشر. تم اعتماد المدرسة الأمريكية بالإسكندرية من قبل وزارة التعليم المصرية كمدرسة مشتركة ، تلتزم بالمناهج الأمريكية وتمنح دبلومة المدرسة الثانوية الأمريكية</p>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p><i class="fa fa-phone"></i>الموبايل: <span> 20 3 330-7555 / 330-7558</span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-address-card"></i>العنوان:<span> الحي التاني, الهضبه الوسطي , المقطم</span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-credit-card"></i>مصاريف العام:<span> 13 الف جنية</span></p>
						    </li>
						  </ul>
						  <div class="card-body text-center">
						    <a href="https://www.asa-egypt.com/" class="card-link at">
						    	<i class="fa fa-at"></i>
						    </a>
						    <a href="https://www.facebook.com/Egyptian.American.School/" class="card-link facebook">
						    	<i class="fa fa-facebook"></i>
						    </a>
						    <a href="https://www.google.com/maps/place/31.241582,29.974441999999954" class="card-link map">
						    	<i class="fa fa-map"></i>
						    </a>
						  </div>
					</div>
			    </div>
    		</div>
    		<div class="row">
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-right" style="width: 18rem;">
						  <img src="imgs/bbc.jfif" class="card-img-top" alt="المدرسة الدولية">
						  <div class="card-body">
						    <h5 class="card-title">المدرسة الدولية BBC</h5>
						    <p class="card-text text-center">لتعزيز بيئة التعلم حيث يتم تشجيع الطلاب للوصول إلى أقصى إمكاناتهم وتطويرها إلى مواطنين منتجين ومسؤولين ومثقفين قادرين على مواجهة تحديات بيئة عالمية دائمة التغير. , يحصل منها الطالب علي الدبلومة الامريكية و البريطانية</p>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p><i class="fa fa-phone"></i>الموبايل: <span>  02 22781111, 22782222 </span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-address-card"></i>العنوان:<span> طريق القاهرة بلبيس الصحراوي،</span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-credit-card"></i>مصاريف العام:<span> الامريكية 30600 , اما البريطانية 4000</span></p>
						    </li>
						  </ul>
						  <div class="card-body text-center">
						    <a href="#" class="card-link at">
						    	<i class="fa fa-at"></i>
						    </a>
						    <a href="#" class="card-link facebook">
						    	<i class="fa fa-facebook"></i>
						    </a>
						    <a href="https://www.google.com/maps/place/30%C2%B009'16.0%22N+31%C2%B025'39.8%22E/@30.15444,31.4255333,17z/data=!4m5!3m4!1s0x0:0x0!8m2!3d30.15444!4d31.427722" class="card-link map">
						    	<i class="fa fa-map"></i>
						    </a>
						  </div>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-right" style="width: 18rem;">
						  <img src="imgs/bccis.png" class="card-img-top" alt="مدرسة بريتيش">
						  <div class="card-body">
						    <h5 class="card-title">مدرسة بريتيش كولومبيا الكندية الدولية (BCCIS)</h5>
						    <p class="card-text text-center">تطبق BCCIS المناهج الدراسية BC من KG2 ،إلى الصف 12 . وقد تم تصنيف المناهج الدراسية BC كواحدة من أفضل أنظمة التعليم دوليا. نحن لا نسعى فقط لمساعدة طلابنا على أن يصبحوا مفكرين نقديين ، ولكن أيضا لمساعدتهم </p>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p><i class="fa fa-phone"></i>الموبايل: <span>  01002128112 ,01002128113</span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-address-card"></i>العنوان:<span> القطعة 34 ، طريق السويس ،  الحي الخامس</span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-credit-card"></i>مصاريف العام:<span> كندية تمهيدية 124ال , ثانوية 138الف</span></p>
						    </li>
						  </ul>
						  <div class="card-body text-center">
						    <a href="https://bccis.ca/" class="card-link at">
						    	<i class="fa fa-at"></i>
						    </a>
						    <a href="https://www.facebook.com/bcciscairo/" class="card-link facebook">
						    	<i class="fa fa-facebook"></i>
						    </a>
						    <a href="https://www.google.com/maps/place/30%C2%B006'44.2%22N+31%C2%B036'54.0%22E/@30.1122689,31.6128158,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d30.1122689!4d31.6150045" class="card-link map">
						    	<i class="fa fa-map"></i>
						    </a>
						  </div>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-right" style="width: 18rem;">
						  <img src="imgs/international.jpg" class="card-img-top" alt="المدرسة الامريكية">
						  <div class="card-body">
						    <h5 class="card-title">المدرسة الدولية الامريكية فى مصر</h5>
						    <p class="card-text text-center">تقدم المدرسة الأمريكية الدولية في مصر (إيس) تعليما أمريكيا ودوليا شاملا وتحديا يعزز المواطنة المحلية والإقليمية والعالمية. نحن إلهام الطلاب ليكونوا المتعلمين مدى الحياة الذين يساهمون إيجابيا في عالم متنوع ومتغير.</p>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p><i class="fa fa-phone"></i>الموبايل: <span>  012 00002833  , 02 26174002  </span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-address-card"></i>العنوان:<span> التجمع الخامس ، أمام بوابة 5 </span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-credit-card"></i>مصاريف العام:<span> الاعداية والابتدائية 184 الف</span></p>
						    </li>
						  </ul>
						  <div class="card-body text-center">
						    <a href="https://www.aisegypt.com/page.cfm?p=1" class="card-link at">
						    	<i class="fa fa-at"></i>
						    </a>
						    <a href="https://www.facebook.com/AISEgypt/" class="card-link facebook">
						    	<i class="fa fa-facebook"></i>
						    </a>
						    <a href="https://www.google.com/maps/place/30%C2%B002'10.0%22N+31%C2%B025'15.5%22E/@30.0361175,31.4187848,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d30.0361175!4d31.4209735" class="card-link map">
						    	<i class="fa fa-map"></i>
						    </a>
						  </div>
					</div>
			    </div>
    		</div>
    		<div class="row">
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-right" style="width: 18rem;">
						  <img src="imgs/amgadinternational.jpg" class="card-img-top" alt="مدرسة امجد">
						  <div class="card-body">
						    <h5 class="card-title">مدرسة امجد للغات الدولية</h5>
						    <p class="card-text text-center">مفهوم جديد للتعليم..... تؤمن مدارس أمجاد بأن العلم والإيمان دفتان لمركب واحد وجناحان لطائر واحد لذا كان الاهتمام بترسيخ القيم والأخلاق الإسلامية وقد تم مراعاة فصل البنات عن البنين في جميع المراحل التعليمية </p>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p><i class="fa fa-phone"></i>الموبايل: <span>  02 25176003 , 25176002 </span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-address-card"></i>العنوان:<span> شارع النصر، تقسيم اللاسلكي ، المعادي </span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-credit-card"></i>مصاريف العام:<span> الشهادة المصري 12500جنية</span></p>
						    </li>
						  </ul>
						  <div class="card-body text-center">
						    <a href="#" class="card-link at">
						    	<i class="fa fa-at"></i>
						    </a>
						    <a href="https://www.facebook.com/Amgadinternationalschools/" class="card-link facebook">
						    	<i class="fa fa-facebook"></i>
						    </a>
						    <a href="https://www.google.com/maps/place/30.404991785659966,31.421127095818974" class="card-link map">
						    	<i class="fa fa-map"></i>
						    </a>
						  </div>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-right" style="width: 18rem;">
						  <img src="imgs/royalinter.jpg" class="card-img-top" alt=" مدرسة رويال">
						  <div class="card-body">
						    <h5 class="card-title">مدارس رويال انترناشيونال للغات</h5>
						    <p class="card-text text-center">تلتزم مدارس اللغة الملكية بتوفير جودة عالية، التعليم الذي يشجع على استقلال الأفكار، حب دائم للتعلم وتشكيل طلابها إلى أعضاء مسؤولين في مجتمعاتهم المحلية والعالمية., مدارس رويال انترناشيونال للغات تخدم الأطفال </p>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p><i class="fa fa-phone"></i>الموبايل: <span>  36912740 - 36912741 </span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-address-card"></i>العنوان:<span>  مدينة 6 أكتوبر، الحى الرابع</span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-credit-card"></i>مصاريف العام:<span> الدبلومة الامريكية الثانوية 12150جنيه</span></p>
						    </li>
						  </ul>
						  <div class="card-body text-center">
						    <a href="https://www.hugedomains.com/domain_profile.cfm?d=royallanguageschools&e=com" class="card-link at">
						    	<i class="fa fa-at"></i>
						    </a>
						    <a href="https://www.facebook.com/royalinterntionalschools/" class="card-link facebook">
						    	<i class="fa fa-facebook"></i>
						    </a>
						    <a href="https://www.google.com/maps/place/29%C2%B057'24.1%22N+30%C2%B055'49.4%22E/@29.956699,30.9282061,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d29.956699!4d30.9303948" class="card-link map">
						    	<i class="fa fa-map"></i>
						    </a>
						  </div>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-right" style="width: 18rem;">
						  <img src="imgs/nevertarii.jfif" class="card-img-top" alt="مدرسة نفرتاري">
						  <div class="card-body">
						    <h5 class="card-title">مدرسة نفرتاري الدولية</h5>
						    <p class="card-text text-center">وتهدف مدارس نفرتاري الدولية إلى تمكين طلابها من البرامج الصعبة للتعليم الدولي والتقييم الدقيق من خلال استخدام أحدث التقنيات. كما يهدف إلى تطوير مهارات ومهارات المعرفة لدى الطلاب من منظور دولي والتفاهم بين الثقافات </p>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p><i class="fa fa-phone"></i>الموبايل: <span> 26562521– 26562522 </span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-address-card"></i>العنوان:<span> طريق القاهرة الإسماعلية الصحراوي</span></p>
						    </li>
						    <li>
						    	<p><i class="fa fa-credit-card"></i>مصاريف العام:<span> الدبلومة الالمانية 42800جنية </span></p>
						    </li>
						  </ul>
						  <div class="card-body text-center">
						    <a href="https://niscl.net/" class="card-link at">
						    	<i class="fa fa-at"></i>
						    </a>
						    <a href="https://www.facebook.com/Nefertari-International-school-183705221698650/" class="card-link facebook">
						    	<i class="fa fa-facebook"></i>
						    </a>
						    <a href="google.com/maps/place/30.156631018058725,31.44031763076805" class="card-link map">
						    	<i class="fa fa-map"></i>
						    </a>
						  </div>
					</div>
			    </div>
    		</div>
    	</div>
    </div>


	<!-- end schools information -->

	<!-- start personal information -->

	<div class="personal-information text-center">
		<div class="container">
			<h5 class="personal-information-title">تسجيل البيانات</h5>
			<form action="index.php" method="POST" class="text-right">
               <div class="row">
               	 <div class="col-md-6 col-sm-12">
               	 			<label for="firstName">الاسم الاول *</label>
							<input type="text" name="firstName" id="firstName" class="form-control">
							<label for="lastName">الاسم الاخير *</label>
							<input type="text" name="lastName" id="lastName" class="form-control">
							<label for="email">الايميل *</label>
							<input type="email" name="email" id="email" class="form-control">
               	 </div>
               	 <div class="col-md-6 col-sm-12">
               	 	<label for="textarea">اترك رسالة </label>
               	 	<textarea id="textarea" class="form-control"></textarea>
               	 	<input type="submit" name="submit" id="submit" value="ارسال" class="form-control">
               	 </div>
               </div>
			</form>
			
		</div>
	</div>

	<!-- end personal information -->

	<!-- start footer -->

   <div class="footer">
   	 <div class="container">
   	 	<div class="footer-content">
   	 		<p>جميع الحقوق محفوظة  	&copy; لوزارة التعليم 2021</p>
   	 	</div>
   	 </div>
   </div>

	<!-- end footer -->


	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>