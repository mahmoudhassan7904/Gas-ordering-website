<?php include 'header.php'; ?>

<div class="about-container">
    <div class="about-hero">
        <h1>Kuhusu Mahsan Gas Services</h1>
        <p class="tagline">Mahsan Gas Services ni kampuni inayojihusisha na utoaji wa huduma za gesi majumbani na kibiashara ndani ya jiji la Dar es Salaam. Tunatoa huduma za usambazaji wa mitungi ya gesi, ufungaji wa mifumo ya gesi, ukaguzi wa usalama pamoja na ushauri wa matumizi sahihi ya gesi.
            Tunalenga kuwapatia wateja wetu huduma bora, salama na za kuaminika kwa kuhakikisha wanapata gesi kwa urahisi, kwa wakati na kwa viwango vinavyokubalika kitaalamu.</p>
    </div>

    <div class="about-content">
        <section class="mission">
            <h2>Maono Yetu</h2>
            <p>Kuwa kampuni inayoongoza katika utoaji wa huduma za gesi jijini Dar es Salaam na Tanzania kwa ujumla, kwa kuzingatia ubunifu, usalama na kuridhisha wateja wetu. </p>
        </section>

        <section class="mission">
            <h2>Dhamira Yetu</h2>
            <p>Dhamira ya Mahsan Gas Services ni kutoa huduma za gesi zilizo salama, nafuu na zenye ubora wa hali ya juu kwa wakazi wa Dar es Salaam, huku tukizingatia usalama wa watumiaji na mazingira. </p>
        </section>


        <section class="story">
            <h2>Hadithi Yetu</h2>
            <p>Mahsan Gas Services ilianzishwa kwa lengo la kutatua changamoto za upatikanaji wa gesi kwa urahisi na kwa usalama kwa wakazi wa Dar es Salaam. Kampuni ilianza kama wazo la kutoa huduma bora na za kuaminika kwa jamii, na imeendelea kukua kwa kujikita katika ubora wa huduma na uaminifu kwa wateja.</p>
        </section>

        <section class="why-us">
            <h2>Kwa Nini sisi tuwe chaguo lako la mwanzo?.</h2>
            <div class="why-grid">
                <div class="why-item">
                    <i class="fas fa-shipping-fast"></i>
                    <h3>Usafirishaji wa Haraka</h3>
                    <p>Tunasafirisha ndani ya Dar es Salaam na maeneo ya karibu ndani ya masaa 24.</p>
                </div>
                <div class="why-item">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Uhakika wa Ubora wa bidhaa zetu.</h3>
                    <p>Bidhaa zote zinakuja zikiwa seald na tunaangalia ubora kabla ya kuuzwa.</p>
                </div>
                <div class="why-item">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h3>Bei za Ushindani</h3>
                    <p>Tunatoa bei bora zaidi chini ya bei za sokoni bila kupunguza ubora.</p>
                </div>
                <div class="why-item">
                    <i class="fas fa-headset"></i>
                    <h3>Huduma ya Wateja masaa 24 kwa kila siku</h3>
                    <p>Tuko tayari kukusaidia wakati wowote kupitia simu au barua pepe, tunasemaaa!!! Simu moja tuu Gas mlangoni kwakoo!!!.</p>
                </div>
            </div>
        </section>

        <section class="team">
            <h2>Timu Yetu</h2>
            <p>Mahsan Gas Services ina timu ya wataalamu wenye uzoefu katika usambazaji na ufungaji wa mifumo ya gesi. Timu yetu imejikita katika kutoa huduma kwa ufanisi, usalama na heshima kwa wateja wetu. Tunafanya kazi kwa kushirikiana kuhakikisha kila mteja anapata huduma bora inayokidhi mahitaji yake.</p>
        </section>

        <section class="contact-cta">
            <h2>Tuko Tayari Kukusaidia!</h2>
            <p>Una swali au unahitaji ushauri wa bidhaa? Wasiliana nasi leo!</p>
            <a href="contact.php" class="cta-btn">Wasiliana Nasi</a>
        </section>
    </div>
</div>

<?php include 'footer.php'; ?>

<style>
    .about-container {
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 20px;
    }

    .about-hero {
        text-align: center;
        margin-bottom: 60px;
    }

    .about-hero h1 {
        font-size: 48px;
        color: #2c3e50;
        margin-bottom: 15px;
    }

    .about-hero .tagline {
        font-size: 20px;
        color: #27ae60;
        font-weight: 600;
    }

    .about-content section {
        margin-bottom: 60px;
    }

    .about-content h2 {
        color: #27ae60;
        font-size: 32px;
        margin-bottom: 20px;
        text-align: center;
    }

    .mission,
    .story,
    .team {
        background: white;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        font-size: 18px;
        line-height: 1.7;
        color: #555;
    }

    .why-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-top: 30px;
    }

    .why-item {
        background: white;
        padding: 30px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
        transition: transform 0.3s ease;
    }

    .why-item:hover {
        transform: translateY(-10px);
    }

    .why-item i {
        font-size: 48px;
        color: #27ae60;
        margin-bottom: 20px;
    }

    .why-item h3 {
        color: #2c3e50;
        margin-bottom: 15px;
    }

    .contact-cta {
        text-align: center;
        background: #27ae60;
        color: white;
        padding: 60px 20px;
        border-radius: 20px;
    }

    .contact-cta h2 {
        color: white;
        margin-bottom: 20px;
    }

    .cta-btn {
        display: inline-block;
        background: white;
        color: #27ae60;
        padding: 14px 35px;
        border-radius: 50px;
        font-weight: bold;
        font-size: 18px;
        text-decoration: none;
        margin-top: 20px;
        transition: all 0.3s ease;
    }

    .cta-btn:hover {
        background: #219653;
        color: white;
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .about-hero h1 {
            font-size: 36px;
        }

        .contact-grid {
            grid-template-columns: 1fr;
        }
    }
</style>