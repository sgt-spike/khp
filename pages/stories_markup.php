<?php // 
   /* This is the markup for the family stories page */
   /* Markup template for the gallery page 
      ----------------------------------------------------------
      <a href="familystories.php?q=">
         <li class="gallery story">
            <img src="img/.jpg" alt="" class="img-main">
            <div class="desc">
               <h2></h2>
               <p>...</p>
            </div>
         </li>
      </a>
      ----------------------------------------------------------
   */
  /* Markup template for the individual stories 
     -----------------------------------------------------------
      elseif ($q == '') {
         // Create varibles for the numbe of photo to be used 
         $photo# = '<div class="mySlides"><img src="img/.jpg" style="width:100%;"></div>';
         // Create markup variable for the individual story page
         $markup =   $arrow . 
                     $slideshow_start . 
                     $photo# . // <-- Include all photo variables from above
                     $slideshow_end . 
                     '<div class="story-h1"><h1></h1></div>
                     <div class="story-article">
                        <article></article>
                     </div>';
      }
  */
   $q = $_GET['q'];
   $arrow = '<div class="div-arrow">
               <a id="arrow" href="familystories.php?q=stories" target="_self"><i class="fas fa-angle-double-left">THE FAMILIES</i>
               </a>
            </div>';
   $slideshow_start = '<div class="slideshow-container">';
   $slideshow_end = '   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                     </div>
                     <br>
                     <div class="dot-group">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                     </div><br>';
   if ($q == 'stories') {
      /* Gallery page */
      $markup = '<h1 id="stories-h1" class="main-h1">Stories of our Amazing People</h1>
                 <ul id="stories-ul" class="stories-ul">
                     <a href="familystories.php?q=Danica">
                        <li class="gallery story">
                           <img src="img/Danica_thumb.jpg" alt="Danica" class="img-main">
                           <div class="desc">
                              <h2>Danica</h2>
                              <p>In October 2017, our family, a party of four, left home in Skagway, Alaska, to visit family in Washington. We thought we\'d be gone a couple of weeks, but did not return as a family for almost 9 months. The day after Thanksgiving, after numerous doctor visits regarding unexplained head pain, Danica, 21 months, received an MRI, and doctors found a large mass in her brain...
                              </p>
                           </div>
                        </li>
                     </a>
                     <a href="familystories.php?q=Nathan">
                        <li class="gallery story">
                           <img src="img/Nathan.jpg" alt="Nathan" class="img-main">
                           <div class="desc">
                              <h2>Nathan</h2>
                              <p>Nathan is the youngest of 4 brothers.  He is a very polite kid with lots of friends and has been on the honor roll at Hanshew Middle school this whole year. In February, he started to feel like he was getting the flu. Things like the brightness on the TV would hurt his eyes...
                              </p>
                           </div>
                        </li>
                     </a>
                     <a href="familystories.php?q=Phoenix">
                        <li class="gallery story" id="story-2">
                           <img src="img/phoenix_thumb.jpg" alt="Phoenix" class="img-main">
                           <div class="desc">
                              <h2>Phoenix</h2>
                              <p>Phoenix is our spunky, charismatic, happy 4 year old who is obsessed with anything Disney related, and his favorite character is Woody from Toy Story. He loves to wrestle with his Dad and 2 big brothers Koko & Bubba, plus give his dog King a run for his money as well....</p>
                           </div>
                        </li>
                     </a>
                     <a href="familystories.php?q=Shelli">
                        <li class="gallery story">
                           <img src="img/shelli_thumb.jpg" alt="Shelli" class="img-main">
                           <div class="desc">
                              <h2>Shelli</h2>
                              <p>In July of 2015, I went to the doctor because I was having a bad pain that would wake me up in the middle of the night and lasted all day long. I went to 5 different doctors and they all said it was a pulled muscle but I was losing weight and just didn\'t feel good. I just knew it wasn\'t a pulled muscle!...</p>
                           </div>
                        </li>
                     </a>
                     <a href="familystories.php?q=Christian">
                        <li class="gallery story" id="story-3">
                           <img src="img/christian-3.jpg" alt="Christian" class="img-main">
                           <div class="desc">
                              <h2>Christian</h2>
                              <p>Christian Rehe, an active 21-year-old with high functioning autism and 4-time Taekwondo medalist at USAT Taekwondo Nationals, began having knee pain back in January during a Taekwondo class...
                              </p>
                           </div>
                        </li>
                     </a>
                  </ul>';
   } elseif ($q == 'Danica') {

      $photo1 = '<div class="mySlides">
                  <img src="img/Danica_thumb.jpg" style="width:100%;">
                  </div>';
      $photo2 = '<div class="mySlides">
                  <img src="img/Danica+at+Christmas.jpg" style="width:100%;">
                  </div>';
      $photo3 = '<div class="mySlides">
                     <img src="img/Danica.jpg" style="width:100%;">
                  </div>';
      $markup = $arrow .
                $slideshow_start .
                $photo1 .
                $photo2 .
                $photo3 . 
                $slideshow_end .
               '<div class="story-h1"><h1>Danica</h1></div>
               <div class="story-article">
                  <article>
                     In October 2017, our family, a party of four, left home in Skagway, Alaska, to visit family in Washington. We thought we\'d be gone a couple of weeks, but did not return as a family for almost 9 months. The day after Thanksgiving, after numerous doctor visits regarding unexplained head pain, Danica, 21 months, received an MRI, and doctors found a large mass in her brain. She was taken by ambulance to Seattle Children\'s Hospital where doctors were able to completely remove the golf ball-sized tumor, and Danica suffered no deficits. Unfortunately, the pathology report showed that Danica had grade IV brain cancer Atypical Teratoid Rhabdoid Tumor (AT/RT), a baby brain cancer, which carried a 30% survival rate. We moved into Ronald McDonald House--mom and dad, big brother Harrison, and Danica. She began an intense regimen of chemotherapy that saw her doing six rounds (five months) of chemotherapy, including three stem cell transplants. With some scary happenings along the way, the chemotherapy was working. Just after her last cycle of chemo,...baby brother Hawkins was born! Radiation began quickly; he was one week old. Dad and big brother had to pop back to work in Alaska for 8 days, while mom, Danica, and little bro went every morning to the proton center, and Danica became used to her daily routine of propofol and "rocket ship," and even began to love her radiation helpers. She finished her treatment and was finally able to return home! She remembered her house, and for the first time since she left home, she slept alone, in her own room, in her own bed.<br><br>
                     But coming home was not all roses. All the calendars in the house still said October. There were so many little "teething" remedies around the house that made mom sad to realize what a slow moving train wreck that brain tumor was, first annoying Danica, then causing her discomfort, then pain, then...well, you know the rest. Danica now has to return to Seattle every 3 months for two years, and will be followed by numerous different types of doctors monitoring her for recurrence, and for an extensive list of side effects.<br><br>
                     In October, her second scan after treatment, doctors saw something on the MRI that appeared to be regrowth. There are no protocols for AT/RT relapse, and only a handful of kids who have survived it, so this development was devastating to hear. We were told they would rescan again in 3-6 weeks, so we just had to sit uncomfortably waiting, knowing a single MRI could change everything. So, while Danica was symptom free, we felt if we could not add days to Danica\'s life, we were going to add life to her days. We hopped on a plane and took her to Disneyland and raked in as many smiles and giggles as we could get. (It would never have been enough.) When we returned, the follow up MRI was not reassuring; it showed more inflammation, and Seattle Children\'s Tumor Board was still arguing about what it was like Democrats and Republicans - was it tumor, or scar tissue? Neurosurgery was convinced; she was in the books for a craniotomy. Oncology, was less sure, and they gave us so much hope. Truth be told, we weren\'t convinced it was cancer anymore, but everyone agreed the stakes were too high to leave it alone, so little lady got herself her third brain surgery, and she handled it like the toughest little prize fighter you ever saw. Two days later, the pathology reports came back and the news was no cancer cells. Not a single one.<br><br>
                     <p id="p4">We are home once again. We thank God for his providence and mercy, the doctors for their incredible skill and dedication and for giving us our baby\'s life back, and the family, friends, and generous organizations like Katie’s Handprint who have made it possible for us to focus on our family and take on this incredible Odyssey. Aside from the necessary scan trips...we hope to never do any of this again.
                  </article></div>';
   } elseif ($q == 'Nathan') {
      $photo1 = '<div class="mySlides">
                     <img src="img/Nathan.jpg" style="width:100%;">
                  </div>';
      $photo2 = '<div class="mySlides">
                     <img src="img/Nathan in Treatment.jpg" style="width:100%;">
                  </div>';
      $photo3 = '<div class="mySlides">
                     <img src="img/Nathan Last Day of Chemo.jpg" style="width:100%;">
                  </div>';
      $markup = $arrow . 
               $slideshow_start .
               $photo1 .
               $photo2 .
               $photo3 .
               $slideshow_end .
               '<div class="story-h1"><h1>Nathan</h1></div> 
                <div class="story-article">
                  <article id="art-nathan">
                     <p>Nathan is the youngest of 4 brothers.  He is a very polite kid with lots of friends and has been on the honor roll at Hanshew Middle school this whole year. In February, he started to feel like he was getting the flu. Things like the brightness on the TV would hurt his eyes.  He then started complaining of hearing a heartbeat in his ear. His pediatrician couldn’t figure out what was wrong. His blood work came back good. Then he told me his eyes were starting to get blurry, so we made him an eye appointment for the following week. Over the weekend, he went to see a movie and his uncle asked what he had thought of the movie. He mentioned during the movie he started seeing double. I called around to find an eye doctor that would see him that Sunday. Lens Crafters told us to bring him in and ran tests on him and told us to get him to the emergency room ASAP. That was March 10th and the night before his 14th birthday. They did a bunch of scans and told us he would need surgery.  He had a tumor on his pineal gland. On his birthday, the doctor did surgery to relieve the pressure from the fluid build-up and the surgery was successful. He started chemo in April and had in-patient chemo starting April 29th. After 6 months of chemo, he will get radiation in Seattle. Nathan is a very positive kid and strong. He was born a month and half early and was strong then. We know he’s going to kick this cancer’s butt!</p>
                  </article></div>';
   } elseif ($q == 'Phoenix') {
      $photo1 = '<div class="mySlides">
      <img src="img/phoenix_1.jpg">
   </div>';
      $photo2 = '<div class="mySlides">
      <img src="img/phoenix_2.jpg">
   </div>';
      $photo3 = '<div class="mySlides">
      <img src="img/phoenix_3.jpg">
   </div>';
      $markup = $arrow . 
      $slideshow_start .
      $photo1 .
      $photo2 .
      $photo3 .
      $slideshow_end .
      '<div class="story-h1"><h1>Phoenix</h1></div>
      <div class="story-article"><article>
      Phoenix is our spunky, charismatic, happy 4 year old who is obsessed with anything Disney related, and his favorite character is Woody from Toy Story. He loves to wrestle with his Dad and 2 big brothers Koko & Bubba, plus give his dog King a run for his money as well. In early June (2018) Phoenix had a high fever for 5 days straight and we couldn’t figure out what was going on. After our 2nd trip to the pediatrician they suggested we head to the ER for further testing, and after many hours the Doctor came in and told us Phoenix’s white blood cell count was through the roof, and that he could be looking at Cancer. After being admitted to The Children’s Hospital at Providence, Phoenix underwent a bone marrow biopsy and was officially diagnosed on June 12, 2018 with High Risk Pre-B Cell Acute Lymphoblastic Leukemia or ALL (Phoenix was 3 years old at that time).<br><br>
      We were beyond blown away from this news and the next day Pheonix went into surgery to install his port and start Day 1 of chemotherapy with the start of the first phase, Induction. After 29 days of chemo, spinal pokes, steroids and medications the doctors performed another bone marrow biopsy. They came back with Zero cancer cells!! Which allowed Phoenix to leave the hospital after a 35 day stay. Over the first year he was in & out of the hospital for 100 days had 20 plus blood & platelet transfusions and was poked more times than we want to count.<br><br>
      Phoenix is now in Maintenance Phase of his fight against Cancer. There have been plenty of scary moments for this 4 year old, but it has been amazing to see Pheonix adjust and meet the fight head on! His journey is something we take one day at a time, and we were told his treatment end date is October 3, 2021. He still has a long way to go, but Phoenix Will Rise Above Cancer!!
      </article></div>';
   } elseif ($q == 'Christian') {
      $photo1 = '<div class="mySlides">
                     <img src="img/christian-1.jpg">
                  </div>';
      $photo2 = '<div class="mySlides">
      <img src="img/christian-2.jpg">
   </div>';
      $photo3 = '<div class="mySlides">
      <img src="img/christian-4.jpg">
   </div>';
      $photo4 = '<div class="mySlides">
   <img src="img/christian-5.jpg">
</div>';
      $photo5 = '<div class="mySlides">
      <img src="img/christian-6.jpg">
   </div>';
      $markup = $arrow . 
               
               $slideshow_start .
               $photo1 .
               $photo2 .
               $photo3 .
               $photo4 . 
               $photo5 .  
               $slideshow_end .
               '<div class="story-h1"><h1>Christian</h1></div>
               <div  class="story-article">
                  <article id="art-christian">
                     <img href="" id="christian-1" class="story-img-1">Christian Rehe, an active 21-year-old with high functioning autism and 4-time Taekwondo medalist at USAT Taekwondo Nationals, began having knee pain back in January during a Taekwondo class. We all just shook it off as a minor injury. It didn’t get better, so in March I took him to an urgent care clinic where the doctor thought since there wasn’t any swelling and because he’s been cutting back on how much Taekwondo he was doing so that he could focus more on studies at Job Corps in their electrical program, that it was simply runners knee. He followed through with the doctor’s orders of exercises and things still didn’t get better, if anything it was getting worse. We changed doctors in May from the base to a local clinic in the valley. His new doctor saw him and thought he had a meniscus tear. During this exam there was definite swelling with his right knee, so she sent him for an MRI. She called me with the results of Christian’s MRI on my wedding anniversary, while I was with my Mom who is visiting, at Colony Day’s in Palmer. She was very concerned and did not want to give me this information over the phone but considering the circumstances, it needed to be. She had to tell me multiple times that they thought he had osteosarcoma and that I needed to pick him up immediately from Job Corps and get him to the base hospital on JBER for further imaging. I had no idea what osteosarcoma was at that point. I asked her what it was and that’s when she told me that it is cancer. His MRI showed a tumor on his right distal femur, which is a rare cancer. My mom and I immediately left the Colony Day’s event in Palmer and drove over to Job Corps to get permission to pick Christian up from a field trip that they had all earned. Upon getting to Job Corps had to talk with their security guard on duty at the time and explained who I needed to speak with immediately and why. Everyone I needed to speak with was busy. I told him he had better find someone to get me permission to pick him up now. He was able to get someone who gave me permission and I left to go pick Christian up from the Valley Cinema. From there we headed to the JBER hospital for a CT Scan and x-rays while answering his questions and avoiding telling him that they think he has cancer. We had many many phone calls the next several days and issues with where he was going to be sent for treatment. Since there are not any sarcoma teams in the state of Alaska, they finally agreed to send him to be treated at Seattle Cancer Care Alliance. Once in Seattle, I was able to transfer Christian’s care over to Seattle Children’s Hospital, since they have a better team for this cancer. Christian started chemo back in July and is now currently in his 12th of 18 rounds. He had his Limb Salvage Surgery to remove the tumor in his right distal femur in September. He’s has been to many PT appointments and has many many more to go. He is currently only able to put 25% of his body weight on his right leg and is dependent upon using a walker to get around. Christian has recently started having regular nose bleeds due to the chemo and has needed to have one platelet transfusion. Christian was attending the Alaska Job Corps electrical program when this was found. He was over 50% complete in their program and is liked by all the staff. Their Center Director told me that if she could have 500 more of Christian, she’d take them no questions asked. He is currently on a temporary medical leave, which expires mid-December. The medical staff there are applying for an extension to his medical leave, but it must go through their Regional office. We have had to set up a second household in Seattle while Christian and I are here for his treatment. While still maintaining our permanent household in Palmer. Christian has been thinking and realizing a little at a time just how this is going to affect the rest of his life and there are things that he is no longer going to be able to do. He is quite ready to return home and on good days jokes around asking about a return or exchange policy on his body and how to go about getting a new one. He really just wants to be done and to go home. We were first told that we would get to go home in March but found out later that best-case scenario we could go home in mid-February.</article></div>';
   } elseif ($q == 'Shelli') {
      // Create varibles for the numbe of photo to be used 
      $photo1 = '<div class="mySlides"><img src="img/shelli_1.jpg" style="width:100%;"></div>';
      $photo2 = '<div class="mySlides"><img src="img/shelli_2.jpg" style="width:100%;"></div>';
      // Create markup variable for the individual story page
      $markup =   $arrow . 
                  $slideshow_start . 
                  $photo1 . 
                  $photo2 . 
                  $slideshow_end .
                  '<div class="story-h1"><h1>Shelli</h1></div>
                  <div class="story-article">
                     <article>In July of 2015, I went to the doctor because I was having a bad pain that would wake me up in the middle of the night and lasted all day long. I went to 5 different doctors and they all said it was a pulled muscle but I was losing weight and just didn\t feel good. I just knew it wasn\'t a pulled muscle! After about 2 weeks, my parents took me to the emergency room because it wasn\'t getting better and they said the only thing they could do was a CT scan but the radiation is so much that I shouldn\'t do it unless it was absolutely necessary. Exactly 1 week later, I was at the movie theater and my parents came out of their movie and I said "mom, we need to go to the ER again, I don\'t feel good and I want the CT!" I felt nauseated and just blah! We waited in the ER for at least 3 hours and they had me drink all this dye so they could do the CT scan. They did the scan and we waited and waited and finally the doctor came in. I was kinda joking with him saying "Please tell me you found something!" He then sat down on the bed next to me and said "We found something." It is never a good thing when your doctor sits on the bed to tell you something! He said "We found a large tumor on your left adrenal gland.”<br>
                     I\'ll never forget how it felt hearing those words. My heart just sunk and I couldn\'t even lift my head. I just looked at the floor. They med-evac’d me within 30 minutes because they had no idea how to handle something like this in Fairbanks. I was so scared but I knew God was with me and I was just praying and trying to stay strong! I\'m even crying as I write this because it was so scary and sudden! I was in Anchorage for a few days in the hospital and they said they couldn\'t do surgery until they knew that it wasn\'t a certain kind of tumor. If it was this one kind, then as soon as they touched it with a knife my blood pressure would spike! They took some blood and said it would take about 2 weeks to get the tests back so I went home and waited to have surgery. Surgery was July 28th and it was such a huge surgery! It was 7 hours long and they thought they would only remove the tumor and the adrenal gland but during surgery my surgeon realized that the tumor was stuck to my spleen. Even though he spent 2 hours trying to save my spleen, I was losing too much blood so he had to remove it along with a cyst he found. I was in the PICU for a little less than a week and in the regular pediatric wing for another 4 days before I finally got to go home. When I was home, I found out that it was cancer and it\'s called neuroblastoma. After many tests, it was confirmed about a month later that I was now 100% cancer free.<br>
                     But after about 3 weeks, every time I would eat I\'d have extreme pain in my upper right abdomen. I went in for my post-op appointment and my doctor said that it sounds like my gallbladder needs to be removed. I laughed because I was like "I just had surgery baha". They did every gallbladder test they could think of and they came back clear. They tried me on many different medicines and nothing worked so they decided to remove it anyway and just see if I got better. They removed it the day before my birthday on November 7th and I was pain free for about 2 weeks. Then everything I ate hurt again and even when I didn\'t eat. The doctor re-did a few tests and they are showing nothing. I had my 3-month cancer screening on January 11th and they found 3 new growths that weren\'t there a month and a half ago so whatever it is, it’s growing fast! This is by far the hardest thing I\'ve ever had to go through but God has been with me the WHOLE time. He\'s never left my side once and because I have Him, I can face tomorrow with no fear of the outcome! His perfect love casts out ALL fear! THANK YOU JESUS
                     Shelli had scans done in September of this year (2019) and it showed her tumors had grown over the summer. She has exhausted all of the normal protocol treatments for her cancer so she is in Seattle starting a 1st phase trial. It involves taking some of her T-cells and reprogramming them to fight her cancer when they give them back to her. It is a 3 month treatment plan and she is one of first to have this amount of treatment for this trial. Her journey started in 2015 in Anchorage, Alaska, then to Portland, Seattle, New York, and finally back here in Seattle.</article>
                  </div>';
   }
?>