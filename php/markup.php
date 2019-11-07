<?php
   $q = $_GET['q'];
   if ($q == 'TheBoard') {
      $markup = '<h1 id="board-h1">The Board</h1>
      <div id="board">
         <a href="whoweare.php?q=us1" target="_self">
            <div id="us1" class="gallery">
               <div class="desc top">Founder and Executive Director</div>
               <img src="img/Darlis_board.jpg" alt="Founder and Executive Directive" class="allImg">
               <div class="desc bottom">Darlis Meyer</div>
            </div>
         </a>
         <a href="whoweare.php?q=us2" target="_self">
            <div id="us2" class="gallery">
                  <div class="desc top">President</div>
                  <img src="img/Debbie_board.jpg" alt="Founder and Executive" class="allImg">
                  <div class="desc bottom">Debbie Soares</div> 
            </div>
         </a>
         <a href="whoweare.php?q=us3" target="_self">
            <div id="us3" class="gallery">
                  <div class="desc top">Vice President</div>
                  <img src="img/Jessica_board.jpg" alt="Founder and Executive" class="allImg">
                  <div class="desc bottom">Jessica Jacobsen</div>
            </div>
         </a>
         <a href="whoweare.php?q=us4" target="_self">
            <div id="us4" class="gallery"> 
                  <div class="desc top">Treasurer</div>
                  <img src="img/IMHL_board.jpg" alt="Founder and Executive" class="allImg">
                  <div class="desc bottom">LeeAnn Eissler</div> 
            </div>
         <a href="whoweare.php?q=us5" target="_self">
            <div id="us5" class="gallery">
                  <div class="desc top">Secretary</div>
                  <img src="img/Amber+Photo.jpg" alt="Founder and Executive" class="allImg">
                  <div class="desc bottom">Amber Leach</div>
            </div>
         </a>
       </div>';
   } elseif ($q == 'us1') {
       $markup = '<a id="arrow" href="whoweare.php?q=TheBoard" target="_self"><i class="fas fa-angle-double-left">THE BOARD</i></a>
       <article id="art-execdir" class="whoweare-art">
       <img id="img-execdir" class="whoweare-img" src="img/Darlis+and+Howie+Photo.jpg">
       <h3 id="h3-execdir" class="whoweare-h3" >Darlis Meyer - Founder/Executive Director</h3>
         <p id="p1">I have grown up and lived in Alaska most of my life. My dad was stationed at Fort Richardson when I was 10 years old (35 years ago!). It didn’t take long for my West Texas blood to acclimate to this beautiful state that I call my home and I’m so grateful this is where my children grew up.</p>
         <p id="p2">Supporting nonprofits and helping others when I was able has always been important to me, specifically where children are concerned. I’ve never been directly involved in any capacity other than fundraising and donating so starting Katie’s Handprint was a terrifying yet (therapeutic) prospect.</p>
         <p id="p3">I am a mother to three beautiful children. My oldest son Joshua is on the autism spectrum and one of the most pure hearted people I know. My middle son Jordan serves in the US Army and is currently stationed in Fort Stewart, Georgia. That young man makes me laugh until I can’t breathe sometimes. My youngest…my Katie…she fought an aggressive bone cancer for three years before it took her life in January 2015.</p>
         <p id="p4">During that three year fight for Katie’s life, we met so many amazing families in similar situations to ours. Not all were displaced from home, but the vast majority lost income at a time when that income was most needed. Katie and I received assistance from an organization and quickly decided we needed to do the same once her treatment was complete and we were able to return home to Alaska. We did a major fundraiser here to help support the Jenna Westerholm Pediatric Help$ Fund through the Northwest Sarcoma Foundation. That fund supported families being treated for sarcoma cancers in the Pacific Northwest. After five years, we decided to bring it home to support Alaskan families with children in treatment for any pediatric cancer. We feel this is where we can help most.</p>
         <p id="p5">When I’m not working or fundraising, I’m typically riding my motorcycle or spending time with my husband Howie, our two Bernese Mountain Dogs Oz and Kozmos, and Katie’s cat Nani.</p>
         <p id="p6">My passion to make Katie’s Handprint a thriving success is a very personal one. Should you have any questions for me, please feel free to contact me.</p>
         <p id="p7">(907) 306-6376 <a href="darlis@katieshandprint.org">darlis@katieshandprint.org</a></p>
         </article>';
   } elseif ($q == 'us2') {
      $markup = '<a id="arrow" href="whoweare.php?q=TheBoard" target="_self"><i class="fas fa-angle-double-left">THE BOARD</i></a>
      <article id="art-execdir" class="whoweare-art">
      <img id="img-founder" class="whoweare-img" src="img/Debbie+Photo.jpg" >
      <h3 id="h3-execdir" class="whoweare-h3">Debbie Soares - Founding President</h3>
      <p id="p1">I initially came to Alaska to visit my family for a few months.  Two months into my visit, I started dating a great guy that I ended up marrying and I now consider myself Alaskan as I’ve lived here over half my life.  I am a mother of three great kids and our world turned upside down when our daughter was diagnosed with a form of leukemia.</p>
      <p id="p2">Knowing firsthand the heartache and extreme expenses of having a child with cancer, I can honestly say that we have met some of the best people due to this horrible circumstance.  Six months after diagnosis, another friend said they NEEDED us to meet another family. That family was Darlis and Katie.  Knowing our girls were both battling this horrible disease and around the same age, we just seemed to click perfectly and I’m glad to consider them friends or better yet, family. When asked if I wanted to help assist in another fundraiser for pediatric cancer, I jumped at the chance. Sadly, Katie passed way too soon and in her memory we decided to bring home our fundraising efforts and start Katie’s Handprint.</p>
      <p id="p3">I have served on numerous boards dealing with my kids’ school and other cancer organizations, but nothing compares to knowing I’m helping other Alaskan families impacted by pediatric cancer. Knowing I am doing a small part to help is immensely fulfilling and I can’t wait to see what the future holds for Katie’s Handprint.</p>
      <p id="p4">Should you have any questions, ideas, comments, or concerns, please contact me at (907) 240-2030 or Email <a href="debbie@katieshandprint.org">debbie@katieshandprint.org</a></p></article>';
   } elseif ($q == 'us3') {
      $markup = '<a id="arrow" href="whoweare.php?q=TheBoard" target="_self"><i class="fas fa-angle-double-left">THE BOARD</i></a>
      <article id="art-vp" class="whoweare-art">
      <img id="img-vp" class="whoweare-img" src="img/Jessica+Photo.jpg" >
      <h3 id="h3-vp" class="whoweare-h3">Jessica Jacobsen - Founding Vice President</h3>
      <p id="p1">I am a proud Ahtna Athabaskan from the small rural village of Chitina, born and raised right here in Alaska. My compassion for helping people started when I was young, as I always made sure that anyone did not need anything before I went out. Fast forward to today and that compassion and desire to help people has never wavered.</p>
      <p id="p2">About 10 years ago, I began to get involved in fundraising and 5 years ago, I began to serve annually on the committee of a cause near and dear to Katie (although the focus only reached a small number of Alaskans). At the beginning of 2018, it was decided to form Katie’s Handprint, in Katie’s honor, for Alaskan families where I volunteer as the Vice President on the Board. This is not my first time on a board, although this board is far more personal to me.</p>
      <p id="p3">Growing up in a small village you learn that nothing is easy and help is not right around the corner. Helping people in my home, across the entire state of Alaska, gives me the greatest determination to continue making a difference and I am truly excited to bring this cause to our Alaskan families. I am committed to the bright future of this nonprofit and cannot wait to see how many families we help in our mission to financially assist Alaskan families currently in treatment for pediatric cancers.</p>
      <p id="p4">In my "spare" time, I am pursuing my Master\'s degree in Project Management, and spend as much time as possible with my awesome family of 5! We even find time to ride bikes, hike, camp and I\'m active in our local motorcycle community every summer taking advantage of our short riding season.</p>
      <p id="p5">Should you have any questions, ideas, comments, or concerns, please contact me at (907) 830-2458 or Email <a href="jessica@katieshandprint.org">jessica@katieshandprint.org</a></p></article>';
   } elseif ($q == 'us4') {
      $markup = '<a id="arrow" href="whoweare.php?q=TheBoard" target="_self"><i id="arrow" class="fas fa-angle-double-left">THE BOARD</i></a>
      <article id="art-treasurer" class="whoweare-art">
      <img id="img-treasurer" class="whoweare-img" src="img/IMHL+photo.jpg" >
      <h3 id="h3-treasurer" class="whoweare-h3">Lee Ann Eissler, PhD, FNP, RN - Founding Treasurer</h3>
      <p id="p1">It would have been impossible to predict the impact that single moment in time would have upon me, but this story starts when I touched Katie Elliott as she entered the world.  As the nurse in the operating room and a close family friend, I was privileged to be there for her first breath and I immediately fell in love.</p>
      <p id="p2">Fast forwarding many years, Katie became a beautiful young woman who brought joy and laughter to our lives.  Her cancer diagnosis at age 15 was devastating but Katie, being Katie, maintained grace and wisdom in her fight.  Tragically, she died three short years later in January 2015, leaving a place in my heart that no one else can fill. </p>
      <p id="p3">I know the struggles that Alaskan families experience when a child is diagnosed with cancer and I am proud to part of the solution in Katie’s memory.  As a life-long Alaskan and founding board member of Katie’s Handprint, my goal is to improve the lives of families who are currently impacted by childhood cancer. Through our financial support, we hope families will struggle just a little less during this extremely difficult time in life.</p>
      <p id="p4">Serving on a non-profit board is not a new endeavor for me.  I have served at the state and national level on professional association boards; serving in roles of secretary, treasurer, and chair.  I have also served as clinical support for Anchorage Project Access board.  I have learned many things in my prior board service but most importantly, I’ve learned that passion and dedication are needed.  I bring both to Katie’s Handprint because our work honors Katie and all other children in Alaska fighting the fight against childhood cancer.</p>
      <p id="p5">Please reach out to me. I am always happy to talk about our mission, please contact me at (907) 351-8038 or Email <a href="leeann@eisslergroup.com">leeann@eisslergroup.com</a></p>
      </article>';
   } elseif ($q == 'us5') {
      $markup =  '<a id="arrow" href="whoweare.php?q=TheBoard" target="_self"><i id="arrow" class="fas fa-angle-double-left">THE BOARD</i></a>
      <article id="art-secretary" class="whoweare-art">
      <img id="img-secretary" class="whoweare-img" src="img/Amber+Photo.jpg" >
      <h3 id="h3-secretary" class="whoweare-h3">Amber Leach - Founding Secretary</h3>
      <p id="p1">I come to Katie’s Handprint with a passion for and commitment to doing all I can to make the world a better place one intentional choice at a time. Sounds a little like a stereotypical line from a beauty pageant about world peace, right? But from a very young age my sensitive nature towards philanthropic endeavors were made obvious in food baskets at holiday time, toy donations and the lack of understanding as to why I couldn’t bring home every stray person or animal I encountered.</p>
      <p id="p2">Having not been able to have children of my own, I’ve always been the cool “aunt” or “2nd mom” to my friends’ kids. I knew Katie’s mom from a shop I worked at and had met Katie a few times there. Then, as small of a world as it is, my partner’s kids had grown up with Katie since 2nd grade making my heart all-the-more invested. Katie was part of their family as one of the girls and Katie became best friends. School changes and friend changes didn’t change the bond between them and my love for my partner’s children included Katie immediately. I love “all in” and my heart was all in with Katie and her mom as they fought their fight.</p>
      <p id="p3">In so many parts of our daily lives, we feel helpless and powerless to do anything or make any real difference. I can\'t cure cancer. I can\'t take away the pain. With Katie\'s Handprint, we get to focus on what we CAN do. We CAN let families know we see them, hear them and they\'re not alone. We CAN provide events that include their whole family to celebrate life.  We CAN grant a small monetary gift to try to relieve some pressure in one area of their lives. We CAN love on our neighbors regardless of the battle they\'re waging with hope that we\'re making the world a little better place one intentional choice, child, and family at a time. That\'s how I see (at least) part of our path towards world peace.</p>
      <p id="p4">When not trying to save the world, I work two to three jobs, create, perform and absorb as much art, music, antiquing, and home remodel/decorating projects as possible! This is the first board I\'ve been on though I\'ve served on another major fundraising committee for 7 years and if it weren\'t for my mortgage, I\'d be a fundraising guru full time and do art AND stand up comedy on the side!</p>
      <p id="p5">I strive daily to make progress in my personal "world peace" sharing time, space and cooking with my partners <br>
      I love. I love...all in. I don\'t know how not to. <br>
      With Katie\'s Handprint, I\'m all in.</p>
      <p id="p6">Please feel free to contact me with any questions you may have or to volunteer.<a href="Amber@KatiesHandprint.org">Amber@KatiesHandprint.org</a></p>
      </article>';
   } else if ($q == 'stories') {
      $markup = '<h1 id="stories-h1">Stories of our Amazing People</h1><ul id="stories-ul"><a href="familystories.php?q=Danica" target="_self"><li class="gallery story" id="story-1"><img src="img/Danica_thumb.jpg" alt="Danica" class="img-main"><div class="desc"><h2>Danica</h2><p>In October 2017, our family, a party of four, left home in Skagway, Alaska, to visit family in Washington. We thought we\'d be gone a couple of weeks, but did not return as a family for almost 9 months. The day after Thanksgiving, after numerous doctor visits regarding unexplained head pain, Danica, 21 months, received an MRI, and doctors found a large mass in her brain...</p></div></li></a>
      <a href="familystories.php?q=Nathan" target="_self"><li class="gallery story" id="story-2"><img src="img/Nathan.jpg" alt="Nathan" class="img-main"><div class="desc"><h2>Nathan</h2><p>Nathan is the youngest of 4 brothers.  He is a very polite kid with lots of friends and has been on the honor roll at Hanshew Middle school this whole year. In February, he started to feel like he was getting the flu. Things like the brightness on the TV would hurt his eyes...</p></div></li></ul></a>';
   } elseif ($q == 'Danica') {
      $markup = '<a id="arrow" href="familystories.php?q=stories" target="_self"><i class="fas fa-angle-double-left" onclick="initialLoad;">THE FAMILIES</i></a><h1 id="heading-danica">Danica</h1>
      <article id="art-danica">
      <figure id="danicaXmas" class="figure">
      <img id="imgDanicaXmas" src="img/Danica+at+Christmas.jpg" alt="Danica at Christmas">
      <figcaption>Danica at Christmas</figcaption>
   </figure><p id="p1">In October 2017, our family, a party of four, left home in Skagway, Alaska, to visit family in Washington. We thought we\'d be gone a couple of weeks, but did not return as a family for almost 9 months. The day after Thanksgiving, after numerous doctor visits regarding unexplained head pain, Danica, 21 months, received an MRI, and doctors found a large mass in her brain. She was taken by ambulance to Seattle Children\'s Hospital where doctors were able to completely remove the golf ball-sized tumor, and Danica suffered no deficits. Unfortunately, the pathology report showed that Danica had grade IV brain cancer Atypical Teratoid Rhabdoid Tumor (AT/RT), a baby brain cancer, which carried a 30% survival rate. We moved into Ronald McDonald House--mom and dad, big brother Harrison, and Danica. She began an intense regimen of chemotherapy that saw her doing six rounds (five months) of chemotherapy, including three stem cell transplants. With some scary happenings along the way, the chemotherapy was working. Just after her last cycle of chemo,...baby brother Hawkins was born! Radiation began quickly; he was one week old. Dad and big brother had to pop back to work in Alaska for 8 days, while mom, Danica, and little bro went every morning to the proton center, and Danica became used to her daily routine of propofol and "rocket ship," and even began to love her radiation helpers. She finished her treatment and was finally able to return home! She remembered her house, and for the first time since she left home, she slept alone, in her own room, in her own bed.</p>
         <p id="p2">But coming home was not all roses. All the calendars in the house still said October. There were so many little "teething" remedies around the house that made mom sad to realize what a slow moving train wreck that brain tumor was, first annoying Danica, then causing her discomfort, then pain, then...well, you know the rest. Danica now has to return to Seattle every 3 months for two years, and will be followed by numerous different types of doctors monitoring her for recurrence, and for an extensive list of side effects.</p><figure id="danicaFig" class="figure"><img id="imgDanica" src="img/Danica.jpg" alt="Danica"><figcaption>A Beautiful Dancing Princess</figcaption></figure>
         <p id="p3">In October, her second scan after treatment, doctors saw something on the MRI that appeared to be regrowth. There are no protocols for AT/RT relapse, and only a handful of kids who have survived it, so this development was devastating to hear. We were told they would rescan again in 3-6 weeks, so we just had to sit uncomfortably waiting, knowing a single MRI could change everything. So, while Danica was symptom free, we felt if we could not add days to Danica\'s life, we were going to add life to her days. We hopped on a plane and took her to Disneyland and raked in as many smiles and giggles as we could get. (It would never have been enough.) When we returned, the follow up MRI was not reassuring; it showed more inflammation, and Seattle Children\'s Tumor Board was still arguing about what it was like Democrats and Republicans - was it tumor, or scar tissue? Neurosurgery was convinced; she was in the books for a craniotomy. Oncology, was less sure, and they gave us so much hope. Truth be told, we weren\'t convinced it was cancer anymore, but everyone agreed the stakes were too high to leave it alone, so little lady got herself her third brain surgery, and she handled it like the toughest little prize fighter you ever saw. Two days later, the pathology reports came back and the news was no cancer cells. Not a single one.</p>
         <p id="p4">We are home once again. We thank God for his providence and mercy, the doctors for their incredible skill and dedication and for giving us our baby\'s life back, and the family, friends, and generous organizations like Katie’s Handprint who have made it possible for us to focus on our family and take on this incredible Odyssey. Aside from the necessary scan trips...we hope to never do any of this again.</p>
      </article>';
   } elseif ($q == 'Nathan') {
      $markup = '<a id="arrow" href="familystories.php?q=stories" target="_self"><i id="arrow" class="fas fa-angle-double-left" onclick="initialLoad;">THE FAMILIES</i></a><h1 id="heading-nathan">Nathan</h1><article id="art-nathan"><img src="img/Nathan.jpg" alt="Nathan" class="img-nathan" id="nathan1">Nathan is the youngest of 4 brothers.  He is a very polite kid with lots of friends and has been on the honor roll at Hanshew Middle school this whole year. In February, he started to feel like he was getting the flu. Things like the brightness on the TV would hurt his eyes.  He then started complaining of hearing a heartbeat in his ear. His pediatrician couldn’t figure out what was wrong. His blood work came back good. Then he told me his eyes were starting to get blurry, so we made him an eye appointment for the following week. Over the weekend, he went to see a movie and his uncle asked what he had thought of the movie.<img src="img/Nathan in Treatment.jpg" alt="Nathan in Treatment" class="img-nathan" id="nathan2"> He mentioned during the movie he started seeing double. I called around to find an eye doctor that would see him that Sunday. Lens Crafters told us to bring him in and ran tests on him and told us to get him to the emergency room ASAP. That was March 10th and the night before his 14th birthday. They did a bunch of scans and told us he would need surgery.  He had a tumor on his pineal gland. On his birthday, the doctor did surgery to relieve the pressure from the fluid build-up and the surgery was successful. He started chemo in April and had in-patient chemo starting April 29th. After 6 months of chemo, he will get radiation in Seattle. Nathan is a very positive kid and strong. He was born a month and half early and was strong then. We know he’s going to kick this cancer’s butt!</article><img src="img/Nathan Last Day of Chemo.jpg" alt="Nathan\'s Last day of Chemo" class="img-nathan" id="nathan3">';
   }
   // $myJSON = json_encode($page);
   // echo $myJSON;
?>