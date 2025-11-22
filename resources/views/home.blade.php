<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сапфир - Азиатский ресторан</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Общие стили */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Замените на это */
        .container {
            width: 100%;
            max-width: 1200px; /* Ограничиваем максимальную ширину */
            margin: 0 auto; /* Центрируем контейнер */
            padding: 0 20px; /* Отступы по бокам */
        }


        /* Header Styles */
        .header {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            font-size: 2rem;
            color: #e74c3c;
        }

        .logo h1 {
            font-size: 1.5rem;
            color: #333;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-menu a:hover {
            color: #e74c3c;
        }

        .cart-icon {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 10px 15px;
            background: #f8f9fa;
            border-radius: 25px;
            transition: background 0.3s ease;
        }

        .cart-icon:hover {
            background: #e9ecef;
        }

        .cart-icon i {
            font-size: 1.2rem;
            color: #e74c3c;
        }

        #cart-count {
            background: #e74c3c;
            color: white;
            border-radius: 50%;
            padding: 2px 8px;
            font-size: 0.8rem;
        }

        #cart-total-price {
            font-weight: bold;
            color: #e74c3c;
        }

        /* Hero Section */
        @media (max-width: 768px) {
    .hero {
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                    url('https://png.pngtree.com/thumb_back/fh260/background/20240425/pngtree-top-desk-with-blur-restaurant-background-wooden-table-image_15665383.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: scroll;
        height: 60vh;
        margin-top: 70px;
    }
}

        .hero-content h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .hero-btns {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .btn {
            padding: 12px 30px;
            background: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid white;
        }

        .btn-outline:hover {
            background: white;
            color: #333;
        }
@media (max-width: 768px) {
    /* About Section улучшения */
    .about {
        padding: 3rem 0;
    }
    
    .about-content {
        grid-template-columns: 1fr;
        gap: 2rem;
        text-align: center;
    }
    
    .about-text p {
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
        text-align: left;
        padding: 0 10px;
    }
    
    .features {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 2rem;
    }
    
    .feature {
        padding: 1rem;
        text-align: center;
    }
    
    .feature i {
        font-size: 2rem;
        margin-bottom: 0.8rem;
    }
    
    .feature h3 {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }
    
    .feature p {
        font-size: 0.9rem;
        line-height: 1.5;
    }
    
    .about-image img {
        margin-top: 1rem;
        border-radius: 8px;
    }
}

@media (max-width: 480px) {
    .about {
        padding: 2rem 0;
    }
    
    .about-text p {
        font-size: 0.95rem;
        padding: 0 5px;
        text-align: justify;
    }
    
    .features {
        gap: 1rem;
    }
    
    .feature {
        padding: 0.8rem;
    }
    
    .feature i {
        font-size: 1.8rem;
    }
    
    .feature h3 {
        font-size: 1.1rem;
    }
    
    .feature p {
        font-size: 0.85rem;
    }
}
        /* Section Styles */
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .about, .menu, .gallery, .reviews, .contact {
            padding: 5rem 0;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .feature {
            text-align: center;
            padding: 1.5rem;
        }

        .feature i {
            font-size: 2.5rem;
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        .feature h3 {
            margin-bottom: 0.5rem;
            color: #333;
        }

        .about-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Menu Styles */
        .menu-categories {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .category-btn {
            padding: 12px 25px;
            border: 2px solid #e74c3c;
            background: white;
            color: #e74c3c;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .category-btn:hover {
            background: #e74c3c;
            color: white;
            transform: translateY(-2px);
        }

        .category-btn.active {
            background: #e74c3c;
            color: white;
        }

        .menu-section-title {
            font-size: 2rem;
            margin-bottom: 2rem;
            color: #333;
            text-align: center;
        }

        .menu-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .menu-item {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .item-info {
            padding: 1.5rem;
        }

        .item-info h3 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .price {
            color: #e74c3c;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .item-info p {
            color: #666;
            margin-bottom: 1rem;
        }

        .add-to-cart-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            width: 100%;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .add-to-cart-btn:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }

        /* Modal Styles */
        .menu-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .menu-modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 500px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
        }

        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            background: none;
            border: none;
            color: #333;
        }

        .modal-content img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin: 15px 0;
        }

        #modal-title {
            color: #e74c3c;
            margin-bottom: 10px;
            font-size: 1.5rem;
        }

        #modal-price {
            font-size: 20px;
            font-weight: bold;
            color: #e74c3c;
            margin: 10px 0;
        }

        #modal-description {
            color: #666;
            line-height: 1.6;
        }

        /* Quantity Selector */
        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 20px 0;
            justify-content: center;
        }

        #decrease-quantity, #increase-quantity {
            font-size: 20px;
            padding: 10px 15px;
            cursor: pointer;
            background-color: #e74c3c;
            border: none;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            min-width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #decrease-quantity:hover, #increase-quantity:hover {
            background-color: #c0392b;
        }

        .quantity-selector span {
            font-size: 20px;
            font-weight: bold;
            min-width: 40px;
            text-align: center;
            padding: 10px;
            border: 2px solid #eee;
            border-radius: 5px;
        }

        /* Ingredients */
        #ingredients {
            margin: 20px 0;
            text-align: left;
            border: 1px solid #eee;
            padding: 15px;
            border-radius: 8px;
        }

        #ingredients h4 {
            margin-bottom: 15px;
            color: #333;
            font-size: 16px;
        }

        #ingredient-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .ingredient-item {
            display: flex;
            align-items: center;
            padding: 8px;
            border-radius: 5px;
            transition: background-color 0.2s ease;
        }

        .ingredient-item:hover {
            background-color: #f8f9fa;
        }

        .ingredient-item input {
            margin-right: 12px;
            transform: scale(1.2);
        }

        .ingredient-item span {
            font-size: 14px;
            color: #333;
        }

        #add-to-cart-modal {
            background-color: #f1c40f;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            color: #333;
            font-weight: bold;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }

        #add-to-cart-modal:hover {
            background-color: #f39c12;
            transform: translateY(-2px);
        }

        /* Cart Styles */
        .cart-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 999;
        }

        .cart-overlay.active {
            display: block;
        }

        .cart-sidebar {
            position: fixed;
            top: 0;
            right: -400px;
            width: 380px;
            height: 100%;
            background: white;
            z-index: 1000;
            transition: right 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .cart-sidebar.active {
            right: 0;
        }

        .cart-header {
            padding: 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .close-cart {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        .cart-items {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
        }

        .cart-item {
            display: flex;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .cart-item-image img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
        }

        .cart-item-info {
            flex: 1;
        }

        .cart-item-info h4 {
            margin: 0 0 5px 0;
        }

        .cart-item-info p {
            margin: 0 0 5px 0;
            font-size: 14px;
            color: #666;
        }

        .cart-item-price {
            font-weight: bold;
            color: #e74c3c;
        }
        

        .cart-item-quantity {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-btn {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            background: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .remove-item {
            background: none;
            border: none;
            color: #e74c3c;
            cursor: pointer;
            margin-left: 10px;
        }

        .cart-summary {
            padding: 20px;
            border-top: 1px solid #eee;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 18px;
            margin: 15px 0;
            padding-top: 15px;
            border-top: 2px solid #eee;
        }

        .btn-checkout {
            width: 100%;
            padding: 15px;
            background: #e74c3c;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .empty-cart {
            text-align: center;
            padding: 40px 20px;
            color: #666;
        }
/* Улучшенная адаптивность БЕЗ бургер-меню */
@media (max-width: 768px) {
    /* Header - скрываем меню, оставляем только лого и корзину */
    .nav-menu {
        display: none;
    }
    
    .nav {
        justify-content: space-between;
        padding: 0.8rem 0;
    }
    
    .logo h1 {
        font-size: 1.3rem;
    }
    
    .cart-icon {
        padding: 8px 15px;
        font-size: 0.9rem;
    }
    
    /* Hero секция улучшения */
    .hero {
        margin-top: 80px;
        height: 50vh;
        min-height: 400px;
    }
    
    .hero-content h2 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
    }
    
    .hero-content p {
        font-size: 1rem;
        margin-bottom: 1.5rem;
        padding: 0 10px;
    }
    
    .hero-btns {
        flex-direction: column;
        gap: 10px;
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }
    
    .btn {
        width: 100%;
        text-align: center;
    }
    
    /* Меню улучшения */
    .menu-categories {
        gap: 8px;
        margin-bottom: 20px;
    }
    
    .category-btn {
        padding: 10px 15px;
        font-size: 13px;
        flex: 1;
        min-width: 100px;
        text-align: center;
    }
    
    .menu-items {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    /* Корзина улучшения */
    .cart-sidebar {
        width: 100%;
        right: -100%;
    }
    
    .cart-item {
        flex-direction: column;
        text-align: center;
        padding: 1rem 0;
    }
    
    .cart-item-info h4 {
        font-size: 1rem;
    }
    
    .cart-item-quantity {
        justify-content: center;
        margin-top: 10px;
    }
    
    /* Контактная форма улучшения */
    .contact-content {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .contact-form {
        padding: 0;
    }
    
    .form-group input,
    .form-group select,
    .form-group textarea {
        font-size: 16px; /* Предотвращает зум в iOS */
    }
    
    /* Модальные окна улучшения */
    .modal-content {
        width: 95%;
        margin: 10px;
        padding: 20px;
    }
    
    .quantity-selector {
        gap: 10px;
    }
    
    #decrease-quantity, 
    #increase-quantity {
        min-width: 45px;
        height: 45px;
    }
}

/* Для очень маленьких экранов */
@media (max-width: 480px) {
    .container {
        padding: 0 15px;
    }
    
    .hero-content h2 {
        font-size: 1.5rem;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .logo h1 {
        font-size: 1.1rem;
    }
    
    .cart-icon {
        padding: 6px 12px;
        font-size: 0.8rem;
    }
    
    #cart-count {
        padding: 1px 5px;
        font-size: 11px;
    }
}

/* Улучшения для удобства на тач-устройствах */
@media (hover: none) and (pointer: coarse) {
    .menu-item,
    .add-to-cart-btn,
    .btn,
    .category-btn {
        min-height: 44px; /* Минимальный размер для касания */
    }
    
    /* Убираем ховер-эффекты на тач-устройствах */
    .menu-item:hover {
        transform: none;
    }
    
    .add-to-cart-btn:hover,
    .btn:hover {
        transform: none;
    }
}
        .empty-cart i {
            font-size: 48px;
            margin-bottom: 15px;
            color: #ddd;
        }

        /* Gallery Styles */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1rem;
        }

        .gallery-item {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay i {
            color: white;
            font-size: 2rem;
        }

        /* Contact Styles */
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-details {
            margin: 2rem 0;
        }

        .contact-detail {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .contact-detail i {
            color: #e74c3c;
            font-size: 1.2rem;
            width: 20px;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: #e74c3c;
            color: white;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group textarea {
            height: 100px;
            resize: vertical;
        }

        /* Booking Summary */
        .booking-summary {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .booking-item {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
            border-bottom: 1px solid #eee;
        }

        .booking-total {
            margin-top: 10px;
            padding-top: 10px;
            border-top: 2px solid #ddd;
        }

        .booking-ingredients-info {
            margin-top: 15px;
            padding: 12px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #f1c40f;
        }

        .ingredient-modification {
            font-size: 13px;
            color: #666;
            margin: 5px 0;
            padding-left: 10px;
        }

        .ingredient-modification::before {
            content: "• ";
            color: #e74c3c;
        }

        /* Footer */
        .footer {
            background: #333;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-column h3 {
            margin-bottom: 1rem;
            color: #e74c3c;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #555;
        }

        /* Animations */
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }
            
            .hero-content h2 {
                font-size: 2rem;
            }
            
            .about-content,
            .contact-content,
            .footer-content {
                grid-template-columns: 1fr;
            }
            
            .features {
                grid-template-columns: 1fr;
            }
            
            .cart-sidebar {
                width: 100%;
                right: -100%;
            }
        }
        /* Адаптивность для мобильных устройств */
@media (max-width: 768px) {
    /* Header */
    .nav {
        flex-direction: column;
        gap: 15px;
    }
    
    .nav-menu {
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }
    
    .logo h1 {
        font-size: 1.2rem;
    }
    
    /* Hero Section */
    .hero {
        margin-top: 120px;
        height: 70vh;
    }
    
    .hero-content h2 {
        font-size: 2rem;
    }
    
    .hero-content p {
        font-size: 1rem;
        padding: 0 20px;
    }
    
    .hero-btns {
        flex-direction: column;
        gap: 10px;
    }
    
    /* About Section */
    .about-content {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .features {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    /* Menu */
    .menu-items {
        grid-template-columns: 1fr;
    }
    
    .menu-categories {
        gap: 10px;
    }
    
    .category-btn {
        padding: 10px 15px;
        font-size: 14px;
    }
    
    /* Contact Section */
    .contact-content {
        grid-template-columns: 1fr;
    }
    
    /* Footer */
    .footer-content {
        grid-template-columns: 1fr;
        gap: 2rem;
        text-align: center;
    }
    
    /* Cart */
    .cart-sidebar {
        width: 100%;
        right: -100%;
    }
    
    .cart-item {
        flex-direction: column;
        text-align: center;
    }
    
    .cart-item-quantity {
        justify-content: center;
    }
    
    /* Modal */
    .modal-content {
        width: 95%;
        margin: 10px;
        padding: 20px;
    }
}

/* Адаптивность для планшетов */
@media (max-width: 1024px) and (min-width: 769px) {
    .menu-items {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .about-content {
        gap: 2rem;
    }
    
    .features {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Адаптивность для очень маленьких экранов */
@media (max-width: 480px) {
    .hero-content h2 {
        font-size: 1.5rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .menu-section-title {
        font-size: 1.5rem;
    }
    
    .container {
        padding: 0 15px;
    }
    
    /* Форма бронирования */
    .contact-form {
        padding: 20px;
    }
    
    .form-group input,
    .form-group select,
    .form-group textarea {
        padding: 10px;
    }
    
    .btn {
        padding: 10px 20px;
        font-size: 14px;
    }
}

/* Улучшения для touch-устройств */
@media (hover: none) and (pointer: coarse) {
    .menu-item:hover {
        transform: none;
    }
    
    .add-to-cart-btn:hover,
    .btn:hover {
        transform: none;
    }
    
    /* Увеличиваем область клика для мобильных */
    .menu-item {
        cursor: pointer;
    }
    
    .add-to-cart-btn,
    .btn,
    .category-btn {
        min-height: 44px; /* Минимальный размер для касания */
        display: flex;
        align-items: center;
        justify-content: center;
    }
}

/* Плавная прокрутка для всех устройств */
html {
    scroll-behavior: smooth;
}

/* Улучшения для модальных окон на мобильных */
@media (max-width: 768px) {
    .menu-modal {
        padding: 10px;
    }
    
    .modal-content {
        max-height: 85vh;
    }
    
    .quantity-selector {
        gap: 10px;
    }
    
    #decrease-quantity, 
    #increase-quantity {
        min-width: 40px;
        height: 40px;
    }
}

/* Адаптивность галереи */
@media (max-width: 768px) {
    .gallery-grid {
        grid-template-columns: 1fr;
    }
    
    .gallery-item img {
        height: 200px;
    }
}
    </style>
</head>
<body>
    <!-- Шапка сайта -->
    <header class="header">
        <nav class="nav container">
            <div class="logo">
                <i class="fas fa-utensils"></i>
                <h1>Сапфир</h1>
            </div>
            <ul class="nav-menu">
                <li><a href="#home">Главная</a></li>
                <li><a href="#about">О нас</a></li>
                <li><a href="#menu">Меню</a></li>
                <li><a href="#gallery">Галерея</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
            <div class="cart-icon" onclick="openCart()">
                <i class="fas fa-shopping-cart"></i>
                <span id="cart-count">0</span>
                <span id="cart-total-price">0 р.</span>
            </div>
        </nav>
    </header>

    <!-- Главный баннер -->
    <section id="home" class="hero">
    <div class="hero-content">
        <h2>Искусство азиатской кухни</h2>
        <p>Насладитесь подлинными вкусами Японии, Китая и Таиланда в атмосфере гармонии и уюта</p>
        <div class="hero-btns">
            <a href="#menu" class="btn">Посмотреть меню</a>
            <a href="#contact" class="btn btn-outline">Забронировать стол</a>
        </div>
    </div>
</section>

    <!-- О нас -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">О нашем ресторане</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Ресторан "Сапфир" предлагает уникальное путешествие в мир азиатской кухни. Наши шеф-повара с многолетним опытом готовят блюда по традиционным рецептам, используя только свежие и качественные ингредиенты.</p>
                    <p>Мы создали атмосферу уюта и гармонии, где каждый гость может насладиться не только изысканными блюдами, но и почувствовать дух Востока.</p>
                    <div class="features">
                        <div class="feature">
                            
                            <h3>Свежие продукты</h3>
                            <p>Используем только свежие и качественные ингредиенты</p>
                        </div>
                        <div class="feature">
                            
                            <h3>Опытные повара</h3>
                            <p>Наши шеф-повара с многолетним опытом</p>
                        </div>
                        <div class="feature">
                            
                            <h3>Традиционные рецепты</h3>
                            <p>Готовим по аутентичным рецептам</p>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Интерьер ресторана">
                </div>
            </div>
        </div>
    </section>

    <!-- Меню -->
    <section id="menu" class="menu">
        <div class="container">
            <h2 class="section-title">Наше меню</h2>
            <div class="menu-categories">
                <button class="category-btn active" data-category="all">Все блюда</button>
                <button class="category-btn" data-category="food">Основные блюда</button>
                <button class="category-btn" data-category="drink">Напитки</button>
            </div>
            
            <!-- Основные блюда -->
            <div class="menu-section" id="food-section">
                <h3 class="menu-section-title">Основные блюда</h3>
                <div class="menu-items">
                    <!-- Блюда остаются без изменений -->
                    <div class="menu-item" data-category="food" onclick="openMenuItem('Корн дог', 325, 'https://i.pinimg.com/474x/30/75/54/307554f136ead19aec93091d331349f1.jpg', 'Картошка фри, сосиска')">
                        <img src="https://i.pinimg.com/474x/30/75/54/307554f136ead19aec93091d331349f1.jpg" alt="Корн дог">
                        <div class="item-info">
                            <h3>Корн дог <span class="price">325 р.</span></h3>
                            <p>Картошка фри, сосиска</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Корн дог', 325, 'Картошка фри, сосиска', 'https://i.pinimg.com/474x/30/75/54/307554f136ead19aec93091d331349f1.jpg')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-category="food" onclick="openMenuItem('Рамен том ям', 480, 'https://avatars.mds.yandex.net/get-altay/7742431/2a0000018414e9e47897c4f6f776fd0d9756/XXXL', 'Говяжий бульон, лапша, креветки, лук')">
                        <img src="https://avatars.mds.yandex.net/get-altay/7742431/2a0000018414e9e47897c4f6f776fd0d9756/XXXL" alt="Рамен том ям">
                        <div class="item-info">
                            <h3>Рамен том ям <span class="price">480 р.</span></h3>
                            <p>Говяжий бульон, лапша, креветки, лук</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Рамен том ям', 480, 'Говяжий бульон, лапша, креветки, лук', 'https://avatars.mds.yandex.net/get-altay/7742431/2a0000018414e9e47897c4f6f776fd0d9756/XXXL')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>
                      
                    <div class="menu-item" data-category="food" onclick="openMenuItem('Роллы белый жемчуг', 530, 'https://avatars.mds.yandex.net/i?id=6729f34a0976150ce576c13d293ca440_l-10311550-images-thumbs&ref=rim&n=13&w=1200&h=1200', 'Рис, нори, угорь, омлет тамаго')">
                        <img src="https://avatars.mds.yandex.net/i?id=6729f34a0976150ce576c13d293ca440_l-10311550-images-thumbs&ref=rim&n=13&w=1200&h=1200" alt="Роллжемчуг">
                        <div class="item-info">
                            <h3>Роллы белый жемчуг <span class="price">530 р.</span></h3>
                            <p>Рис, нори, угорь, омлет тамаго</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Роллы белый жемчуг', 530, 'Рис, нори, угорь, омлет тамаго', 'https://avatars.mds.yandex.net/i?id=6729f34a0976150ce576c13d293ca440_l-10311550-images-thumbs&ref=rim&n=13&w=1200&h=1200')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-category="food" onclick="openMenuItem('Роллы Филадельфия микс', 690, 'https://static.life.ru/ip/unsafe/rs:fill:1200:/gravity:ce/q:100/czM6Ly9saWZlLXN0YXRpYy9wdWJsaWNhdGlvbnMvMjAyNC8xMS8yOC82MDAyMTIyNzY1ODkuOTg1LndlYnA=', 'Авокадо, сливочный сыр')">
                        <img src="https://rnr.ua/storage/2025/01/01/f8c77a05ce9307debbfbb849c1d597ed/conversions/19169359846924198-webp_wide.webp" alt="РоллФиладельфия">
                        <div class="item-info">
                            <h3>Роллы Филадельфия микс <span class="price">690 р.</span></h3>
                            <p>Авокадо, сливочный сыр</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Роллы Филадельфия микс', 690, 'Авокадо, сливочный сыр', 'https://static.life.ru/ip/unsafe/rs:fill:1200:/gravity:ce/q:100/czM6Ly9saWZlLXN0YXRpYy9wdУБsaWNhdGlvbnMvMjAyNC8xMS8yOC82MDAyMTIyNzY1ODkuOTg1LndlYnA=')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-category="food" onclick="openMenuItem('Роллы Темпура с копченной курицей', 459, 'https://image.vsem-edu-oblako.ru/upload/store/merchant1506/ebitem1708603831.jpg', 'Рис, сливочный сыр, копченная курица')">
                        <img src="https://image.vsem-edu-oblako.ru/upload/store/merchant1506/ebitem1708603831.jpg" alt="Роллытемпура">
                        <div class="item-info">
                            <h3>Роллы Темпура с копченной курицей <span class="price">459 р.</span></h3>
                            <p>Рис, сливочный сыр, копченная курица</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Роллы Темпура с копченной курицей', 459, 'Рис, сливочный сыр, копченная курица', 'https://image.vsem-edu-oblako.ru/upload/store/merchant1506/ebitem1708603831.jpg')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-category="food" onclick="openMenuItem('Токпокки', 520, 'https://avatars.mds.yandex.net/i?id=b746d632921cfb83890eeecea354db6e_l-4575666-images-thumbs&n=13', 'Клецки, соус, овощи, сыр')">
                        <img src="https://avatars.mds.yandex.net/i?id=b746d632921cfb83890eeecea354db6e_l-4575666-images-thumbs&n=13" alt="Токпокки">
                        <div class="item-info">
                            <h3>Токпокки <span class="price">520 р.</span></h3>
                            <p>Клецки, соус, овощи, сыр</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Токпокки', 520, 'Клецки, соус, овощи, сыр', 'https://avatars.mds.yandex.net/i?id=b746d632921cfb83890eeecea354db6e_l-4575666-images-thumbs&n=13')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-category="food" onclick="openMenuItem('Ролл Хокку', 429, 'https://static.tildacdn.com/tild3165-3835-4633-b830-333862613263/SRG_7372.jpg', 'Лук фри, сливочный сыр, курица копченная')">
                        <img src="https://static.tildacdn.com/tild3165-3835-4633-b830-333862613263/SRG_7372.jpg" alt="Хокку">
                        <div class="item-info">
                            <h3>Ролл Хокку <span class="price">429 р.</span></h3>
                            <p>Лук фри, сливочный сыр, курица копченная</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Ролл Хокку', 429, 'Лук фри, сливочный сыр, курица копченная', 'https://static.tildacdn.com/tild3165-3835-4633-b830-333862613263/SRG_7372.jpg')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-category="food" onclick="openMenuItem('Кимпаб', 495, 'https://avatars.mds.yandex.net/i?id=21ee1479a2a4ffe04deaa73386f99fb1_l-4565467-images-thumbs&n=13', 'Курица, овощи, рис, нори')">
                        <img src="https://avatars.mds.yandex.net/i?id=21ee1479a2a4ffe04deaa73386f99fb1_l-4565467-images-thumbs&n=13" alt="Кимпаб">
                        <div class="item-info">
                            <h3>Кимпаб <span class="price">495 р.</span></h3>
                            <p>Курица, овощи, рис, нори</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Кимпаб', 495, 'Курица, овощи, рис, нори', 'https://avatars.mds.yandex.net/i?id=21ee1479a2a4ffe04deaa73386f99fb1_l-4565467-images-thumbs&n=13')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-category="food" onclick="openMenuItem('Рамен чиз', 510, 'https://imageproxy.wolt.com/menu/menu-images/626962a3bd97ccfe1ba86597/fb6af030-bad8-11ed-a8f2-5e340a30d313________________________.jpeg', 'Рис, тигровая креветка, японский омлет, сыр, икра самаго')">
                        <img src="https://imageproxy.wolt.com/menu/menu-images/626962a3bd97ccfe1ba86597/fb6af030-bad8-11ed-a8f2-5e340a30d313________________________.jpeg" alt="Раменсырный">
                        <div class="item-info">
                            <h3>Рамен чиз <span class="price">510 р.</span></h3>
                            <p>Рис, тигровая креветка, японский омлет, сыр, икра самаго</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Рамен чиз', 510, 'Рис, тигровая креветка, японский омлет, сыр, икра самаго', 'https://imageproxy.wolt.com/menu/menu-images/626962a3bd97ccfe1ba86597/fb6af030-bad8-11ed-a8f2-5e340a30d313________________________.jpeg')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Напитки -->
            <div class="menu-section" id="drink-section">
                <h3 class="menu-section-title">Напитки</h3>
                <div class="menu-items">
                    <div class="menu-item" data-category="drink" onclick="openMenuItem('Мохито', 150, 'https://imageproxy.wolt.com/menu/menu-images/65672ce2bf2f9280bf555c7c/f42b6ac2-9050-11ee-8ec3-325e0fdc9ce7_______.jpg', 'Лайм, свежая мята, газированная вода')">
                        <img src="https://imageproxy.wolt.com/menu/menu-images/65672ce2bf2f9280bf555c7c/f42b6ac2-9050-11ee-8ec3-325e0fdc9ce7_______.jpg" alt="Мохито">
                        <div class="item-info">
                            <h3>Мохито <span class="price">150 р.</span></h3>
                            <p>Лайм, свежая мята, газированная вода</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Мохито', 150, 'Лайм, свежая мята, газированная вода', 'https://imageproxy.wolt.com/menu/menu-images/65672ce2bf2f9280bf555c7c/f42b6ac2-9050-11ee-8ec3-325e0fdc9ce7_______.jpg')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>
 <div class="menu-item" data-category="drink" onclick="openMenuItem('Орео бабл', 455, 'https://avatars.mds.yandex.net/i?id=6a702a7f623eb5f3ce01a3ea014aaa92_l-4557789-images-thumbs&n=13', 'Печенье oreo, топпинг')">
                        <img src="https://avatars.mds.yandex.net/i?id=6a702a7f623eb5f3ce01a3ea014aaa92_l-4557789-images-thumbs&n=13" alt="ОреоБабл">
                        <div class="item-info">
                            <h3>Орео бабл <span class="price">455 р.</span></h3>
                            <p>Печенье oreo, топпинг</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Орео бабл', 455, 'Печенье oreo, топпинг', 'https://avatars.mds.yandex.net/i?id=6a702a7f623eb5f3ce01a3ea014aaa92_l-4557789-images-thumbs&n=13')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-category="drink" onclick="openMenuItem('Тайгер шугар', 280, 'https://avatars.mds.yandex.net/i?id=142403b3808bb7c37d6b3c5ace227309_l-5268626-images-thumbs&n=13', 'Молоко, тапиока, браун шугар, черный чай')">
                        <img src="https://avatars.mds.yandex.net/i?id=142403b3808bb7c37d6b3c5ace227309_l-5268626-images-thumbs&n=13" alt="ТайгерШугар">
                        <div class="item-info">
                            <h3>Тайгер шугар <span class="price">280 р.</span></h3>
                            <p>Молоко, тапиока, браун шугар, черный чай</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Тайгер шугар', 280, 'Молоко, тапиока, браун шугар, черный чай', 'https://avatars.mds.yandex.net/i?id=142403b3808bb7c37d6b3c5ace227309_l-5268626-images-thumbs&n=13')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                                        <div class="menu-item" data-category="drink" onclick="openMenuItem('Банановое молоко', 220, 'https://ic.pics.livejournal.com/mundic/16057954/992608/992608_1000.jpg', 'Молоко, банан')">
                        <img src="https://ic.pics.livejournal.com/mundic/16057954/992608/992608_1000.jpg" alt="БанановоеМолоко">
                        <div class="item-info">
                            <h3>Банановое молоко <span class="price">220 р.</span></h3>
                            <p>Молоко, банан</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Банановое молоко', 220, 'Молоко, банан', 'https://ic.pics.livejournal.com/mundic/16057954/992608/992608_1000.jpg')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-category="drink" onclick="openMenuItem('Дынное молоко', 220, 'https://prostokvashino.ru/upload/resize_cache/iblock/e35/800_800_0/e35e8e5c9f0be179959d56ab50aa461a.jpg', 'Молоко, дыня')">
                        <img src="https://prostokvashino.ru/upload/resize_cache/iblock/e35/800_800_0/e35e8e5c9f0be179959d56ab50aa461a.jpg" alt="ДынноеМолоко">
                        <div class="item-info">
                            <h3>Дынное молоко <span class="price">220 р.</span></h3>
                            <p>Молоко, дыня</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Дынное молоко', 220, 'Молоко, дыня', 'https://prostokvashino.ru/upload/resize_cache/iblock/e35/800_800_0/e35e8e5c9f0be179959d56ab50aa461a.jpg')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-category="drink" onclick="openMenuItem('Кофейная любовь Чонён', 320, 'https://i.pinimg.com/736x/1d/ca/d8/1dcad8af32d14fe80c56bc3bce678f71.jpg', 'Ассорти из свежих фруктовых соков')">
                        <img src="https://i.pinimg.com/736x/1d/ca/d8/1dcad8af32d14fe80c56bc3bce678f71.jpg" alt="КофейнаяЛюбовь">
                        <div class="item-info">
                            <h3>Кофейная любовь Чонён <span class="price">320 р.</span></h3>
                            <p>Ассорти из свежих фруктовых соков</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Кофейная любовь Чонён', 320, 'Ассорти из свежих фруктовых соков', 'https://i.pinimg.com/736x/1d/ca/d8/1dcad8af32d14fe80c56bc3bce678f71.jpg')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-category="drink" onclick="openMenuItem('Она ждала тебя', 335, 'https://i01.fotocdn.net/s122/7186470b1ef8b0e7/public_pin_l/2791272342.jpg', 'Айс-ти кофе, земляника')">
                        <img src="https://i01.fotocdn.net/s122/7186470b1ef8b0e7/public_pin_l/2791272342.jpg" alt="ЖдалаТебя">
                        <div class="item-info">
                            <h3>Она ждала тебя <span class="price">335 р.</span></h3>
                            <p>Айс-ти кофе, земляника</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Она ждала тебя', 335, 'Айс-ти кофе, земляника', 'https://i01.fotocdn.net/s122/7186470b1ef8b0e7/public_pin_l/2791272342.jpg')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>

                    <div class="menu-item" data-category="drink" onclick="openMenuItem('Юдзу чай', 335, 'https://korfood.ru/upload/iblock/ece/vmm1ls26e1lu8l4th4c2lu9fptwdrpnn/Napitok-s-tsitronom-yudzu-i-vitaminom-S-Woongjin_-280-ml-_2_.jpg', 'Цитрус, анчан')">
                        <img src="https://korfood.ru/upload/iblock/ece/vmm1ls26e1lu8l4th4c2lu9fptwdrpnn/Napitok-s-tsitronom-yudzu-i-vitaminom-S-Woongjin_-280-ml-_2_.jpg" alt="ЮдзуЧай">
                        <div class="item-info">
                            <h3>Юдзу чай <span class="price">335 р.</span></h3>
                            <p>Цитрус, анчан</p>
                            <button class="add-to-cart-btn" onclick="event.stopPropagation(); addToCartDirect('Юдзу чай', 335, 'Цитрус, анчан', 'https://korfood.ru/upload/iblock/ece/vmm1ls26e1lu8l4th4c2lu9fptwdrpnn/Napitok-s-tsitronom-yudzu-i-vitaminom-S-Woongjin_-280-ml-_2_.jpg')">
                                <i class="fas fa-plus"></i> Добавить
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                    <!-- Остальные напитки... -->
                </div>
            </div>
        </div>
    </section>

    <!-- Модальное окно с подробным описанием блюда -->
    <div id="menu-modal" class="menu-modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeMenuItem()">&times;</span>
            <h3 id="modal-title"></h3>
            <img id="modal-image" src="" alt="">
            <p id="modal-description"></p>
            <p id="modal-price"></p>
            
            <!-- Количество товара -->
            <div class="quantity-selector">
                <button id="decrease-quantity" class="btn">-</button>
                <span id="quantity">1</span>
                <button id="increase-quantity" class="btn">+</button>
            </div>
            
            <!-- Выбор ингредиентов -->
            <div id="ingredients">
                <h4>Убрать ингредиенты</h4>
                <div id="ingredient-list"></div>
            </div>
            
            <!-- Кнопка добавления в корзину -->
            <button id="add-to-cart-modal" class="btn">Добавить в корзину</button>
        </div>
    </div>
  
    <!-- Галерея -->
    <section id="gallery" class="gallery">
        <div class="container">
            <h2 class="section-title">Галерея</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://avatars.mds.yandex.net/i?id=2bdf3f3bb734e8aef66418967d8717f1_l-5502412-images-thumbs&n=13" alt="Блюдо">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://i.pinimg.com/736x/c9/3a/84/c93a840b602fcbb95b17482a3310dd6a.jpg" alt="Интерьер">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://static19.tgcnt.ru/posts/_0/15/15ba3da0b58ba30ceb8b5e06e92059e9.jpg" alt="Шеф-повар">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Отзывы -->
    <section class="reviews">
        <div class="container">
            <h2 class="section-title">Отзывы наших гостей</h2>
            <div class="review-slider">
                <div class="review-slide">
                    <div class="review-text">
                        <p>Невероятно вкусная еда и прекрасная атмосфера. Обязательно вернемся снова!</p>
                    </div>
                    <div class="review-author">
                        <div class="author-avatar">
                            <img src="https://avatars.mds.yandex.net/get-yapic/41409/perN2x9ku8DgHVvFCyXrukaQIbU-1/orig" alt="Аватар">
                        </div>
                        <div class="author-info">
                            <h4>Мария Иванова</h4>
                            <p>Постоянный клиент</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Контакты -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Контакты</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Ресторан "Сапфир"</h3>
                    <div class="contact-details">
                        <div class="contact-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>г. Москва, ул. Восточная, д. 15</p>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-phone"></i>
                            <p>+7 (495) 123-45-67</p>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-clock"></i>
                            <p>Пн-Вс: 11:00 - 23:00</p>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-envelope"></i>
                            <p>info@sakura-restaurant.ru</p>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-telegram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-vk"></i></a>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Забронировать стол</h3>
                    <div class="booking-summary">
                        <h4>Ваш заказ:</h4>
                        <div id="booking-cart-items"></div>
                        <div id="booking-ingredients-info" class="booking-ingredients-info"></div>
                        <div class="booking-total">
                                                    <strong>Итого: <span id="booking-total-price">0 р.</span></strong>
                    </div>
                </div>
                <form method="POST" action="{{ route('reservation.store') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="customer_name" placeholder="Ваше имя" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Телефон" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="date" name="reservation_date" required>
                    </div>
                    <div class="form-group">
                        <input type="time" name="reservation_time" required>
                    </div>
                    <div class="form-group">
                        <select name="guests" required>
                            <option value="1">1 человек</option>
                            <option value="2">2 человека</option>
                            <option value="3">3 человека</option>
                            <option value="4">4 человека</option>
                            <option value="5">5+ человек</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="comments" placeholder="Дополнительные пожелания"></textarea>
                    </div>
                    <input type="hidden" name="order_details" id="order-details-input">
                    <input type="hidden" name="total_amount" id="total-amount-input">
                    <button type="submit" class="btn">Забронировать стол</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Корзина -->
    <div class="cart-overlay" onclick="closeCart()"></div>
    <div class="cart-sidebar">
        <div class="cart-header">
            <h3>Ваша корзина</h3>
            <button class="close-cart" onclick="closeCart()">&times;</button>
        </div>
        <div class="cart-items" id="cart-items">
            <!-- Товары будут добавляться динамически -->
        </div>
        <div class="cart-summary">
            <div class="summary-item">
                <span>Подытог:</span>
                <span id="subtotal">0 р.</span>
            </div>
            <div class="summary-item">
                <span>Доставка:</span>
                <span id="delivery">0 р.</span>
            </div>
            <div class="summary-total">
                <span>Итого:</span>
                <span id="total">0 р.</span>
            </div>
            <button class="btn btn-checkout" onclick="checkout()">Оформить заказ</button>
        </div>
    </div>

    <!-- Подвал -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Ресторан "Сапфир"</h3>
                    <p>Мы предлагаем подлинные вкусы азиатской кухни в атмосфере гармонии и уюта.</p>
                </div>
                <div class="footer-column">
                    <h3>Часы работы</h3>
                    <p>Понедельник - Воскресенье</p>
                    <p>11:00 - 23:00</p>
                </div>
                <div class="footer-column">
                <h3>Навигация</h3>
                    <p><a href="#home" style="color: white; text-decoration: none;">Главная</a></p>
                    <p><a href="#menu" style="color: white; text-decoration: none;">Меню</a></p>
                    <p><a href="#contact" style="color: white; text-decoration: none;">Бронирование</a></p>
                    <p><a href="#gallery" style="color: white; text-decoration: none;">Галерея</a></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 Ресторан "Сапфир". Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script>
        // Улучшения для мобильных устройств
function handleTouchEvents() {
    // Увеличиваем область клика для мобильных
    const touchElements = document.querySelectorAll('.menu-item, .add-to-cart-btn, .btn, .category-btn');
    touchElements.forEach(element => {
        element.style.minHeight = '44px';
        element.style.cursor = 'pointer';
    });
}

// Инициализация при загрузке
document.addEventListener('DOMContentLoaded', function() {
    handleTouchEvents();
    
    // Обновляем год в футере
    const yearElement = document.querySelector('.footer-bottom p');
    if (yearElement) {
        const currentYear = new Date().getFullYear();
        yearElement.textContent = yearElement.textContent.replace('2023', currentYear);
    }
});
        // Переменные для корзины
        let cart = [];
        let currentItem = null;
        let currentQuantity = 1;
        let removedIngredients = [];

        // Функции для модального окна блюда
        function openMenuItem(title, price, image, description) {
            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-image').src = image;
            document.getElementById('modal-description').textContent = description;
            document.getElementById('modal-price').textContent = price + ' р.';
            
            currentItem = {
                title: title,
                price: price,
                image: image,
                description: description
            };
            
            currentQuantity = 1;
            document.getElementById('quantity').textContent = currentQuantity;
            
            // Создаем список ингредиентов из описания
            const ingredientList = document.getElementById('ingredient-list');
            ingredientList.innerHTML = '';
            removedIngredients = [];
            
            const ingredients = description.split(', ');
            ingredients.forEach(ingredient => {
                const ingredientItem = document.createElement('div');
                ingredientItem.className = 'ingredient-item';
                ingredientItem.innerHTML = `
                    <label>
                        <input type="checkbox" value="${ingredient.trim()}">
                        <span>${ingredient.trim()}</span>
                    </label>
                `;
                ingredientList.appendChild(ingredientItem);
            });
            
            document.getElementById('menu-modal').classList.add('active');
        }

        function closeMenuItem() {
            document.getElementById('menu-modal').classList.remove('active');
        }

        function changeQuantity(change) {
            currentQuantity = Math.max(1, currentQuantity + change);
            document.getElementById('quantity').textContent = currentQuantity;
        }

        function addToCartFromModal() {
            if (currentItem) {
                // Получаем список убранных ингредиентов
                const checkboxes = document.querySelectorAll('#ingredient-list input[type="checkbox"]:checked');
                removedIngredients = Array.from(checkboxes).map(cb => cb.value);
                
                // Создаем описание с учетом убранных ингредиентов
                let finalDescription = currentItem.description;
                if (removedIngredients.length > 0) {
                    finalDescription += ` (без: ${removedIngredients.join(', ')})`;
                }
                
                addToCart(currentItem.title, currentItem.price, finalDescription, currentItem.image, currentQuantity);
                closeMenuItem();
                showNotification('Товар добавлен в корзину!');
            }
        }

        function addToCartDirect(title, price, description, image) {
            addToCart(title, price, description, image, 1);
            showNotification('Товар добавлен в корзину!');
        }

        function addToCart(title, price, description, image, quantity) {
            const existingItem = cart.find(item => 
                item.title === title && item.description === description
            );
            
            if (existingItem) {
                existingItem.quantity += quantity;
            } else {
                cart.push({
                    title: title,
                    price: price,
                    description: description,
                    image: image,
                    quantity: quantity
                });
            }
            
            updateCart();
        }

        function updateCart() {
            const cartItems = document.getElementById('cart-items');
            const cartCount = document.getElementById('cart-count');
            const cartTotalPrice = document.getElementById('cart-total-price');
            const subtotal = document.getElementById('subtotal');
            const delivery = document.getElementById('delivery');
            const total = document.getElementById('total');
            const bookingCartItems = document.getElementById('booking-cart-items');
            const bookingTotalPrice = document.getElementById('booking-total-price');
            const bookingIngredientsInfo = document.getElementById('booking-ingredients-info');
            
            // Обновляем количество товаров и общую сумму
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            const totalAmount = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            
            cartCount.textContent = totalItems;
            cartTotalPrice.textContent = totalAmount + ' р.';
            
            // Очищаем корзину
            cartItems.innerHTML = '';
            bookingCartItems.innerHTML = '';
            if (bookingIngredientsInfo) bookingIngredientsInfo.innerHTML = '';
            
            if (cart.length === 0) {
                cartItems.innerHTML = `
                    <div class="empty-cart">
                        <i class="fas fa-shopping-cart"></i>
                        <p>Ваша корзина пуста</p>
                    </div>
                `;
                bookingCartItems.innerHTML = '<p>Корзина пуста</p>';
            } else {
                // Добавляем товары в корзину
                cart.forEach((item, index) => {
                    const hasRemovedIngredients = item.description.includes('(без:');
                    
                    const itemElement = document.createElement('div');
                    itemElement.className = 'cart-item';
                    itemElement.innerHTML = `
                        <div class="cart-item-image">
                            <img src="${item.image}" alt="${item.title}">
                        </div>
                        <div class="cart-item-info">
                            <h4>${item.title}</h4>
                            <p>${item.description}</p>
                            ${hasRemovedIngredients ? `<div class="ingredient-modification">${item.description.split('(без:')[1].replace(')', '')}</div>` : ''}
                            <span class="cart-item-price">${item.price} р. × ${item.quantity}</span>
                        </div>
                        <div class="cart-item-quantity">
                            <button class="quantity-btn" onclick="changeCartQuantity(${index}, -1)">-</button>
                            <span>${item.quantity}</span>
                            <button class="quantity-btn" onclick="changeCartQuantity(${index}, 1)">+</button>
                            <button class="remove-item" onclick="removeFromCart(${index})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    `;
                    cartItems.appendChild(itemElement);

                    // Добавляем товары в блок бронирования
                    const bookingItem = document.createElement('div');
                    bookingItem.className = 'booking-item';
                    bookingItem.innerHTML = `
                        <div>
                            <strong>${item.title} × ${item.quantity}</strong>
                            ${hasRemovedIngredients ? `<div class="ingredient-modification">Без: ${item.description.split('(без:')[1].replace(')', '')}</div>` : ''}
                        </div>
                        <span>${item.price * item.quantity} р.</span>
                    `;
                    bookingCartItems.appendChild(bookingItem);
                });

                // Добавляем информацию об измененных ингредиентах в бронировании
                if (bookingIngredientsInfo) {
                    const hasModifiedIngredients = cart.some(item => item.description.includes('(без:'));
                    if (hasModifiedIngredients) {
                        const ingredientsInfo = document.createElement('div');
                        ingredientsInfo.className = 'booking-ingredients-info';
                        ingredientsInfo.innerHTML = '<strong>Изменения в блюдах:</strong>';
                        
                        cart.forEach(item => {
                            if (item.description.includes('(без:')) {
                                const modification = document.createElement('div');
                                modification.className = 'ingredient-modification';
                                const ingredients = item.description.split('(без:')[1].replace(')', '');
                                modification.textContent = `${item.title}: убрано ${ingredients}`;
                                ingredientsInfo.appendChild(modification);
                            }
                        });
                        
                        bookingIngredientsInfo.appendChild(ingredientsInfo);
                    }
                }
            }
            
            // Обновляем суммы
            const deliveryAmount = totalAmount > 0 ? 200 : 0;
            const totalAmountWithDelivery = totalAmount + deliveryAmount;
            
            subtotal.textContent = totalAmount + ' р.';
            delivery.textContent = deliveryAmount + ' р.';
            total.textContent = totalAmountWithDelivery + ' р.';
            if (bookingTotalPrice) bookingTotalPrice.textContent = totalAmountWithDelivery + ' р.';

            // Обновляем скрытые поля формы
            updateFormData();
        }

        // Функция для обновления скрытых полей формы
        function updateFormData() {
            const orderDetails = cart.map(item => 
                `${item.title} × ${item.quantity} - ${item.price * item.quantity} руб.`
            ).join('\n');
            
            const totalAmount = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0) + 200;
            
            document.getElementById('order-details-input').value = orderDetails;
            document.getElementById('total-amount-input').value = totalAmount;
        }

        function changeCartQuantity(index, change) {
            cart[index].quantity = Math.max(1, cart[index].quantity + change);
            updateCart();
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCart();
        }

        function openCart() {
            document.querySelector('.cart-sidebar').classList.add('active');
            document.querySelector('.cart-overlay').classList.add('active');
        }

        function closeCart() {
            document.querySelector('.cart-sidebar').classList.remove('active');
            document.querySelector('.cart-overlay').classList.remove('active');
        }

        function checkout() {
    if (cart.length === 0) {
        alert('Корзина пуста!');
        return;
    }
    
    // Закрываем корзину и прокручиваем к секции бронирования
    closeCart();
    
    // Плавная прокрутка к секции контактов/бронирования
    const contactSection = document.getElementById('contact');
    if (contactSection) {
        contactSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
    
    // Можно добавить небольшую задержку для лучшего UX
    setTimeout(() => {
        alert('Переходим к оформлению заказа! Заполните форму бронирования.');
    }, 500);
}

        function showNotification(message) {
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: #27ae60;
                color: white;
                padding: 15px 20px;
                border-radius: 5px;
                z-index: 1002;
                animation: slideIn 0.3s ease;
            `;
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

        // Функция для фильтрации меню по категориям
        function initializeMenuFilter() {
            const categoryBtns = document.querySelectorAll('.category-btn');
            const menuSections = document.querySelectorAll('.menu-section');
            
            categoryBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');
                    
                    // Обновляем активную кнопку
                    categoryBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Показываем/скрываем секции
                    menuSections.forEach(section => {
                        if (category === 'all') {
                            section.style.display = 'block';
                        } else if (section.id === category + '-section') {
                            section.style.display = 'block';
                        } else {
                            section.style.display = 'none';
                        }
                    });
                });
            });
        }

        // Обработчики для кнопок модального окна
        document.addEventListener('DOMContentLoaded', function() {
            updateCart();
            initializeMenuFilter();
            
            // Обработчики для кнопок количества в модальном окне
            document.getElementById('decrease-quantity').onclick = () => changeQuantity(-1);
            document.getElementById('increase-quantity').onclick = () => changeQuantity(1);
            document.getElementById('add-to-cart-modal').onclick = addToCartFromModal;

            // Закрытие модальных окон при клике вне их
            document.addEventListener('click', function(event) {
                const modal = document.getElementById('menu-modal');
                if (event.target === modal) {
                    closeMenuItem();
                }
                
                const cartOverlay = document.querySelector('.cart-overlay');
                if (event.target === cartOverlay) {
                    closeCart();
                }
            });

            // Обработчик отправки формы бронирования
            const bookingForm = document.querySelector('.contact-form form');
            if (bookingForm) {
                bookingForm.addEventListener('submit', function(e) {
                    if (cart.length === 0) {
                        e.preventDefault();
                        alert('Добавьте блюда в корзину перед бронированием стола!');
                        return;
                    }
                });
            }
        });

        // Добавляем обработчики событий для Enter на кнопках модального окна
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                const modal = document.getElementById('menu-modal');
                if (modal.classList.contains('active')) {
                    addToCartFromModal();
                }
            }
        });

        // Функция для плавной прокрутки к секциям
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Обновляем год в футере
        document.addEventListener('DOMContentLoaded', function() {
            const yearElement = document.querySelector('.footer-bottom p');
            if (yearElement) {
                const currentYear = new Date().getFullYear();
                yearElement.textContent = yearElement.textContent.replace('2023', currentYear);
            }
        });

        // Добавляем обработчики для галереи
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', function() {
                const img = this.querySelector('img');
                const overlay = document.createElement('div');
                overlay.style.cssText = `
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0,0,0,0.9);
                    z-index: 1001;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: zoom-out;
                `;
                
                const enlargedImg = document.createElement('img');
                enlargedImg.src = img.src;
                enlargedImg.style.cssText = `
                    max-width: 90%;
                    max-height: 90%;
                    object-fit: contain;
                    border-radius: 10px;
                `;
                
                overlay.appendChild(enlargedImg);
                document.body.appendChild(overlay);
                
                overlay.addEventListener('click', function() {
                    document.body.removeChild(overlay);
                });
            });
        });

    </script>

    <!-- Уведомления Laravel -->
    @if(session('success'))
        <script>
            alert('{{ session("success") }}');
            // Очищаем корзину после успешного бронирования
            cart = [];
            updateCart();
        </script>
    @endif

    @if($errors->any())
        <script>
            alert('Ошибка: {{ $errors->first() }}');
        </script>
    @endif
<script>
// Функция для отправки формы бронирования
function handleReservationForm(event) {
    event.preventDefault();
    
    if (cart.length === 0) {
        alert('Добавьте блюда в корзину перед бронированием стола!');
        return;
    }
    
    const form = document.getElementById('reservation-form');
    const formData = new FormData(form);
    
    // Добавляем данные корзины
    formData.append('order_details', document.getElementById('order-details-input').value);
    formData.append('total_amount', document.getElementById('total-amount-input').value);
    
    // Показываем уведомление о отправке
    showNotification('Отправляем вашу заявку...');
    
    // Отправляем данные (замените URL на ваш)
    fetch('/reservation', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showNotification('Заявка успешно отправлена! Мы свяжемся с вами в ближайшее время.');
            // Очищаем корзину после успешной отправки
            cart = [];
            updateCart();
            form.reset();
        } else {
            showNotification('Ошибка: ' + (data.message || 'Попробуйте еще раз'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Ошибка отправки. Пожалуйста, позвоните нам по телефону.');
    });
}

// Обновляем обработчик формы
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('reservation-form');
    if (form) {
        form.addEventListener('submit', handleReservationForm);
    }
    
    // Инициализируем CSRF токен (если нужно)
    const csrfToken = document.querySelector('meta[name="csrf-token"]');
    if (csrfToken) {
        document.getElementById('csrf-token').value = csrfToken.getAttribute('content');
    }
});
</script>
</body>
</html>