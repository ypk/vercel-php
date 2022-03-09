<?php
    $page = basename($_SERVER['SCRIPT_NAME']);

    $menu_json = '{
        "sections": [
        {
            "sectionName": "Appetisers",
            "sectionDescription": "",
            "sectionItems": [
            {
                "itemName": "Aloo Chat Puree",
                "itemAllergenInfo": [
                "Celeriac",
                "Gluten"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "",
                "itemPrice": "4.50"
            },
            {
                "itemName": "Prawn Puree",
                "itemAllergenInfo": [
                "Celeriac",
                "Gluten"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Succulent prawns, spiced, served with a puree",
                "itemPrice": "4.50"
            },
            {
                "itemName": "Chicken Chat",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild",
                "Medium"
                ],
                "itemDescription": "Chicken cooked with cucumber in special spices known as Chat Masala",
                "itemPrice": "4.50"
            },
            {
                "itemName": "Onion Bhaji",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Sliced onion mixed with gram flour and herbs, deep fried",
                "itemPrice": "2.50"
            },
            {
                "itemName": "Samossa Chicken",
                "itemAllergenInfo": [
                "Gluten"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Traditional triangle pastry served with tamarind sauce",
                "itemPrice": "3.45"
            },
            {
                "itemName": "Samossa Veg",
                "itemAllergenInfo": [
                "Gluten"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Traditional triangle pastry served with tamarind sauce",
                "itemPrice": "3.45"
            },
            {
                "itemName": "Mix Kebab",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Chicken Tikka, Lamb Tikka, sheik Kebab",
                "itemPrice": "4.50"
            },
            {
                "itemName": "Tandoori Chicken",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Spring Chicken marinated in special recipe and barbecued in clay oven",
                "itemPrice": "4.50"
            },
            {
                "itemName": "Chicken Tikka",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Boneless chicken marinated in a special recipe and barbecued in the clay oven",
                "itemPrice": "4.50"
            },
            {
                "itemName": "Lamb Tikka",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Lamb marinated in a special recipe and barbecued in the clay oven",
                "itemPrice": "4.50"
            },
            {
                "itemName": "Shiek Kebab",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Lamb mince with onion special herbs and spices",
                "itemPrice": "4.50"
            },
            {
                "itemName": "Shami Kebab",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Minced lamb cooked with Kashmiri spices patties",
                "itemPrice": "4.50"
            },
            {
                "itemName": "Chicken Pakora",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Spiced chicken with gram flour and herbs, deep fried in ghee",
                "itemPrice": "4.50"
            },
            {
                "itemName": "Garlic Chicken Tikka",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Chicken marinated in garlic, green chillies, fresh coriander, cooked in clay oven and served with salad",
                "itemPrice": "4.60"
            },
            {
                "itemName": "Chicken Momo",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Fresh homemade chicken minced steamed Momo / dumplings (contains sesame seeds) served with chef&quot;s special sauce",
                "itemPrice": "5.50"
            },
            {
                "itemName": "Vegetable Momo",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Fresh homemade vegetable minced steamed Momo / dumplings (contains sesame seeds) served with chef&quot;s special sauce",
                "itemPrice": "5.50"
            },
            {
                "itemName": "Chilli Chicken",
                "itemAllergenInfo": [
                "Gluten",
                "Soya"
                ],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Chicken pieces deep fried and tossed up with chillies, peppers and onion",
                "itemPrice": "4.50"
            },
            {
                "itemName": "Paneer Tikka",
                "itemAllergenInfo": [
                "Gluten"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Cottage cheese cubes marinated with yogurt, peppers and picking spice",
                "itemPrice": "4.50"
            }
            ]
        },
        {
            "sectionName": "Tandoori Dishes",
            "sectionDescription": "The following dishes are served with salad and mint sauce",
            "sectionItems": [
            {
                "itemName": "Chicken Tikka",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Grilled Chicken marinated with yoghurt, mint, tandoori paste and Kashmiri masala with herbs",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Grilled Lamb marinated with yoghurt, mint, tandoori paste and Kashmiri masala with herbs",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Paneer Tikka",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Grilled Paneer marinated with yoghurt, mint, tandoori paste and Kashmiri masala with herbs",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Tandoor Chicken",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Spring chicken marinated in special recipe and barbecued in the clay oven",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Chicken Shaslik",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Pieces of Chicken marinated and barbecued in the clay oven with tomato, onion and capsicum",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Shaslik",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Pieces of Lamb marinated and barbecued in the clay oven with tomato, onion and capsicum",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Paneer Shaslik",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Pieces of Paneer marinated and barbecued in the clay oven with tomato, onion and capsicum",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Tandoori Mixed Grill",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Tandoori chicken, lamb tikka, chicken tikka, sheik kebab and plain naan",
                "itemPrice": "11.95"
            },
            {
                "itemName": "Garlic Chicken Tikka",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Chicken marinated in garlic green chillies, fresh coriander, cooked in the clay oven and served with salad",
                "itemPrice": "8.95"
            }
            ]
        },
        {
            "sectionName": "Everest Specials",
            "sectionDescription": "",
            "sectionItems": [
            {
                "itemName": "Mix Bhuna Nawabi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Tender pieces of chicken, lamb and minced meat in medium Bhuna sauce",
                "itemPrice": "9.95"
            },
            {
                "itemName": "Murghi Masala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "On the bone spring chicken, marinated and grilled in clay oven cooked in medium chef special sauce with fresh spring onion",
                "itemPrice": "9.95"
            },
            {
                "itemName": "Shaslik Bhuna Chicken",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Grilled chicken Tikka cooked with onion pepper and tomato in a medium sauce",
                "itemPrice": "9.95"
            },
            {
                "itemName": "Shaslik Bhuna Lamb",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Grilled lamb Tikka cooked with onion pepper and tomato in a medium sauce",
                "itemPrice": "9.95"
            },
            {
                "itemName": "Salmon Palak",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Cooked with fresh spinach, garlic, tomato and coriander in a medium sauce",
                "itemPrice": "10.95"
            },
            {
                "itemName": "Salmon Chilli Karahi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Cooked with fresh ginger, green chilli pepper spring onion and coriander in a medium hot sauce",
                "itemPrice": "10.95"
            },
            {
                "itemName": "King Prawn Goa",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "King prawn, mild in a special cooked original recipe from Goa",
                "itemPrice": "14.95"
            },
            {
                "itemName": "Rosni Bahar Chicken",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Cooked with fresh garlic chunk onion in pepper in thick medium sauce",
                "itemPrice": "9.95"
            },
            {
                "itemName": "Rosni Bahar Lamb",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Cooked with fresh garlic chunk onion in pepper in thick medium sauce",
                "itemPrice": "9.95"
            },
            {
                "itemName": "Lahori Fish",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Sweet water fish cooked with fresh garlic, ginger, spring onion in a medium bhuna sauce",
                "itemPrice": "10.95"
            }
            ]
        },
        {
            "sectionName": "Biryani Dishes",
            "sectionDescription": "Safran rice treated together with meat, chicken or prawns in butter, spices and herbs, served with vegetable curry or Raita",
            "sectionItems": [
            {
                "itemName": "Chicken Biryani",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb  Biryani",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "King Prawn Biryani",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Biryani",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "9.95"
            },
            {
                "itemName": "Lamb Tikka Biryani",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "9.95"
            },
            {
                "itemName": "Vegetable Biryani",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Special Mixed Biryani",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "10.95"
            }
            ]
        },
        {
            "sectionName": "Side Dishes",
            "sectionDescription": "",
            "sectionItems": [
            {
                "itemName": "Mushroom Bhaji",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "3.95"
            },
            {
                "itemName": "Sag Bhaji",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "Spinach",
                "itemPrice": "3.95"
            },
            {
                "itemName": "Bombay Aloo",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "Spicy potatoes",
                "itemPrice": "3.95"
            },
            {
                "itemName": "Sag Aloo",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [],
                "itemDescription": "Spinach and potatoes",
                "itemPrice": "3.95"
            },
            {
                "itemName": "Chana Masala",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [],
                "itemDescription": "Chickpeas",
                "itemPrice": "3.95"
            },
            {
                "itemName": "Tarka Dall",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "Lentils",
                "itemPrice": "3.95"
            },
            {
                "itemName": "Sag Paneer",
                "itemAllergenInfo": [
                "Milk",
                "Celeriac"
                ],
                "itemSpiceInfo": [],
                "itemDescription": "Spinach with cheese",
                "itemPrice": "3.95"
            },
            {
                "itemName": "Sag Dall",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "Spinach with lentils",
                "itemPrice": "3.95"
            }
            ]
        },
        {
            "sectionName": "Chef&quot;s Specialities",
            "sectionDescription": "",
            "sectionItems": [
            {
                "itemName": "Chicken Tandoori Butter",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Chicken cooked with butter and fresh cream in a thick mild sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Tandoori Butter",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Lamb cooked with butter and fresh cream in a thick mild sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Tandoori Butter",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "King Prawns cooked with butter and fresh cream in a thick mild sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Tandoori Butter",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Chicken Tikka cooked with butter and fresh cream in a thick mild sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Tandoori Butter",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Lamb Tikka cooked with butter and fresh cream in a thick mild sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Tandoori Butter",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Vegetables cooked with butter and fresh cream in a thick mild sauce",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Passanda",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Chicken cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Passanda",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Lamb cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Passanda",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "King Prawns cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Passanda",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Chicken Tikka cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Passanda",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Lamb Tikka cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Passanda",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Vegetables cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Massala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Chicken cooked with almonds and coconuts in a aromatic mild sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Massala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Lamb cooked with almonds and coconuts in a aromatic mild sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Massala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "King Prawns cooked with almonds and coconuts in a aromatic mild sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Massala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Chicken Tikka cooked with almonds and coconuts in a aromatic mild sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Massala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Lamb Tikka cooked with almonds and coconuts in a aromatic mild sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Massala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Vegetables cooked with almonds and coconuts in a aromatic mild sauce",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Karahi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Chicken cooked with onions, peppers tomatoes and ginger in a medium sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Karahi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Lamb cooked with onions, peppers tomatoes and ginger in a medium sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Karahi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "King Prawns cooked with onions, peppers tomatoes and ginger in a medium sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Karahi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Chicken Tikka cooked with onions, peppers tomatoes and ginger in a medium sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Karahi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Lamb Tikka cooked with onions, peppers tomatoes and ginger in a medium sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Karahi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Vegetables cooked with onions, peppers tomatoes and ginger in a medium sauce",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Rezzala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Chicken cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Rezzala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Lamb cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Rezzala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "King Prawns cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Rezzala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Chicken Tikka cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Rezzala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Lamb Tikka cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Rezzala",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "Vegetables cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Garlic Chilli",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Chicken cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Garlic Chilli",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Lamb cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Garlic Chilli",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "King Prawns cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Garlic Chilli",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Chicken Tikka cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Garlic Chilli",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Lamb Tikka cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Garlic Chilli",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Vegetables cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Jalferazi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Chicken cooked with onions peppers and fresh green chillies in a fairly hot sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Jalferazi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Lamb cooked with onions peppers and fresh green chillies in a fairly hot sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Jalferazi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "King Prawns cooked with onions peppers and fresh green chillies in a fairly hot sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Jalferazi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Chicken Tikka cooked with onions peppers and fresh green chillies in a fairly hot sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Jalferazi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Lamb Tikka cooked with onions peppers and fresh green chillies in a fairly hot sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Jalferazi",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Vegetables cooked with onions peppers and fresh green chillies in a fairly hot sauce",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Jaipuri",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Chicken cooked with mushrooms, peppers, and spring onions in a medium sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Jaipuri",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Lamb cooked with mushrooms, peppers, and spring onions in a medium sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Jaipuri",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "King Prawns cooked with mushrooms, peppers, and spring onions in a medium sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Jaipuri",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Chicken Tikka cooked with mushrooms, peppers, and spring onions in a medium sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Jaipuri",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Lamb Tikka cooked with mushrooms, peppers, and spring onions in a medium sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Jaipuri",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Vegetables cooked with mushrooms, peppers, and spring onions in a medium sauce",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Nihari",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Chicken cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Nihari",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Lamb cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Nihari",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "King Prawns cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Nihari",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Chicken Tikka cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Nihari",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Lamb Tikka cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Nihari",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Vegetables cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Burkani",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Chicken cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Burkani",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Lamb cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Burkani",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "King Prawns cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Burkani",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Chicken Tikka cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Burkani",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Lamb Tikka cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Burkani",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Vegetables cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Hara",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Chicken cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Hara",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Lamb cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Hara",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "King Prawns cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Hara",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Chicken Tikka cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Hara",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Lamb Tikka cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Hara",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Vegetables cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Pudina",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Chicken cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Pudina",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Lamb cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Pudina",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "King Prawns cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Pudina",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Chicken Tikka cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Pudina",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Lamb Tikka cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Pudina",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "Vegetables cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Naga",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Chicken cooked in bhuna style with very hot sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Naga",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Lamb cooked in bhuna style with very hot sauce",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawns Naga",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "King Prawns cooked in bhuna style with very hot sauce",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Naga",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Chicken Tikka cooked in bhuna style with very hot sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Naga",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Lamb Tikka cooked in bhuna style with very hot sauce",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Naga",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "Vegetables cooked in bhuna style with very hot sauce",
                "itemPrice": "7.95"
            }
            ]
        },
        {
            "sectionName": "Traditional Dishes",
            "sectionDescription": "<ul class=\"section-descripton\"><li>Curry: The medium strength and favourite dish of all time</li>            <li>Madras: A popular dish prepared with chilli and lemon juice</li>            <li>Vindaloo: A hot taste, red peppers, potato, lemon and dozens of spices added to qualify this dish as a most extravagantly hot dish</li>            <li>Korma: A very mild dish cooked in coconut, almond, cream and special korma sauce</li>            <li>Bhuna: Thoroughly garnished dish cooked with onion, capsicum, tomatoes, medium spiced (thick sauce)</li>            <li>Ceylon: Cooked with fairly hot spices and coconut</li>            <li>Dopiaza: Cooked with chopped onions and seasoned with fresh herbs</li>            <li>Rogan Josh: Medium strength spiced and garnished with tomatoes, onions and spice</li>             <li>Saag: Cooked with fresh spinach and a tough of garlic and herbs</li>            <li>Dansak: Cooked with lentils, lemon juice and fresh spices, hot, sweet and sour</li>            <li>Pathia: Sweet and sour dish with onions, tomatoes and fresh spices</li></ul>",
            "sectionItems": [
            {
                "itemName": "Chicken Curry",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Curry",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Curry",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Curry",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Curry",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Curry",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Madras",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Madras",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Madras",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Madras",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Madras",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Madras",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Vindaloo",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Vindaloo",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Vindaloo",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Vindaloo",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Vindaloo",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Vindaloo",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Korma",
                "itemAllergenInfo": [
                "Nuts",
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Korma",
                "itemAllergenInfo": [
                "Nuts",
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Korma",
                "itemAllergenInfo": [
                "Nuts",
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Korma",
                "itemAllergenInfo": [
                "Nuts",
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Korma",
                "itemAllergenInfo": [
                "Nuts",
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Korma",
                "itemAllergenInfo": [
                "Nuts",
                "Milk"
                ],
                "itemSpiceInfo": [
                "Mild"
                ],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Bhuna",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Bhuna",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Bhuna",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Bhuna",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Bhuna",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Bhuna",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Ceylon",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Ceylon",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Ceylon",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Ceylon",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Ceylon",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Ceylon",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Dopiaza",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Dopiaza",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Dopiaza",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Dopiaza",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Dopiaza",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Dopiaza",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Rogan Josh",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Rogan Josh",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Rogan Josh",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Rogan Josh",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Rogan Josh",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Rogan Josh",
                "itemAllergenInfo": [
                "Celeriac"
                ],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Saag",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Saag",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Saag",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Saag",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Saag",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Saag",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium"
                ],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Dansak",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Dansak",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Dansak",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Dansak",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Dansak",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Dansak",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Medium",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Pathia",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Pathia",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Pathia",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Pathia",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Pathia",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Pathia",
                "itemAllergenInfo": [],
                "itemSpiceInfo": [
                "Mild",
                "Hot"
                ],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Balti",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Balti",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Balti",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Balti",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Balti",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Balti",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Bombay",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Bombay",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Bombay",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Bombay",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Bombay",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Bombay",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "7.95"
            },
            {
                "itemName": "Chicken Honey",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "Lamb Honey",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.25"
            },
            {
                "itemName": "King Prawn Honey",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "13.95"
            },
            {
                "itemName": "Chicken Tikka Honey",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Lamb Tikka Honey",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "8.95"
            },
            {
                "itemName": "Vegetable Honey",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "7.95"
            }
            ]
        },
        {
            "sectionName": "Desserts",
            "sectionDescription": "",
            "sectionItems": [
            {
                "itemName": "Handmade Carrot Cake",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "4.49"
            },
            {
                "itemName": "Chocolate Fudge Cake",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "4.49"
            },
            {
                "itemName": "Sticky Chocolate & Orange Cake",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "4.49"
            },
            {
                "itemName": "Ben & Jerry 500ML",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "6.99"
            }
            ]
        },
        {
            "sectionName": "Tandoori Bread",
            "sectionDescription": "",
            "sectionItems": [
            {
                "itemName": "Plain Naan",
                "itemAllergenInfo": [
                "Gluten",
                "Milk"
                ],
                "itemSpiceInfo": [],
                "itemDescription": "Plain leavened bread",
                "itemPrice": "2.80"
            },
            {
                "itemName": "Keema Naan",
                "itemAllergenInfo": [
                "Gluten",
                "Milk"
                ],
                "itemSpiceInfo": [],
                "itemDescription": "Spicy minced lamb",
                "itemPrice": "3.20"
            },
            {
                "itemName": "Peshawar Naan",
                "itemAllergenInfo": [
                "Gluten",
                "Nuts",
                "Milk"
                ],
                "itemSpiceInfo": [],
                "itemDescription": "Coconut and almond",
                "itemPrice": "3.20"
            },
            {
                "itemName": "Garlic Naan",
                "itemAllergenInfo": [
                "Gluten",
                "Milk"
                ],
                "itemSpiceInfo": [],
                "itemDescription": "Garlic and coriander",
                "itemPrice": "3.20"
            },
            {
                "itemName": "Kulsa Naan",
                "itemAllergenInfo": [
                "Gluten",
                "Milk"
                ],
                "itemSpiceInfo": [],
                "itemDescription": "Onion and coriander",
                "itemPrice": "3.20"
            },
            {
                "itemName": "Cheese Naan",
                "itemAllergenInfo": [
                "Gluten",
                "Milk"
                ],
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "3.20"
            },
            {
                "itemName": "Tandoori Roti",
                "itemAllergenInfo": [
                "Gluten"
                ],
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "3.20"
            },
            {
                "itemName": "Paratha",
                "itemAllergenInfo": [
                "Gluten",
                "Milk"
                ],
                "itemSpiceInfo": [],
                "itemDescription": "Butter Fried Layer Bread",
                "itemPrice": "2.80"
            },
            {
                "itemName": "Chapati",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "2.75"
            },
            {
                "itemName": "Chips",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "2.50"
            }
            ]
        },
        {
            "sectionName": "Rice",
            "sectionDescription": "",
            "sectionItems": [
            {
                "itemName": "Plain Rice",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "Boiled rice",
                "itemPrice": "2.80"
            },
            {
                "itemName": "Pilau Rice",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "Basmati rice",
                "itemPrice": "2.95"
            },
            {
                "itemName": "Special Fried Rice",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "Cooked with eggs and peas",
                "itemPrice": "3.50"
            },
            {
                "itemName": "Coconut Rice",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "3.50"
            },
            {
                "itemName": "Mushroom Rice / Vegetable Rice",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "3.50"
            },
            {
                "itemName": "Egg Fried Rice",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "3.50"
            },
            {
                "itemName": "Keema Rice",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "Minced lamb",
                "itemPrice": "3.50"
            },
            {
                "itemName": "Lemon Rice",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "3.50"
            },
            {
                "itemName": "Garlic Rice",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "3.50"
            }
            ]
        },
        {
            "sectionName": "Poppadom & Pickle",
            "sectionDescription": "",
            "sectionItems": [
            {
                "itemName": "Poppadom",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "Plain and spicy",
                "itemPrice": "1.00"
            },
            {
                "itemName": "Raitha",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "Onion or cucumber, yoghurt and black salt",
                "itemPrice": "1.40"
            },
            {
                "itemName": "Lime Pickle",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "0.80"
            },
            {
                "itemName": "Mango Pickle",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "0.80"
            },
            {
                "itemName": "Mint Yogurt Sauce",
                "itemAllergenInfo": [
                "Milk"
                ],
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "0.80"
            },
            {
                "itemName": "Onion Salad",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "0.80"
            }
            ]
        },
        {
            "sectionName": "Drinks",
            "sectionDescription": "",
            "sectionItems": [
            {
                "itemName": "Can",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "Coke / Diet Coke / Orange Fanta / 7up",
                "itemPrice": "1.00"
            },
            {
                "itemName": "Bottle 1.5L",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "Coke / Diet Coke",
                "itemPrice": "2.50"
            }
            ]
        },
        {
            "sectionName": "Set Meals",
            "sectionDescription": "Starters: Chicken Tikka, Onion Bhaji & Poppadom<br />Main Course: Chicken Tikka Masala, Lamb Madras, Sag Aloo, Boiled Rice & Naan",
            "sectionItems": [
            {
                "itemName": "Set Meal For Two",
                "itemAllergenInfo": "",
                "itemSpiceInfo": [],
                "itemDescription": "",
                "itemPrice": "29.95"
            }
            ]
        }
        ]}';

    function getAllergenAndSpiceInfo($items) {
        $allergenAndSpiceInfo = "";
        if (is_array($items)) {
            foreach ($items as $item) {
                $allergenAndSpiceItem = strtolower($item);
                $allergenAndSpiceInfo .= "<span class='${allergenAndSpiceItem}'></span>";
            }
        }
        return $allergenAndSpiceInfo;
    }

    $menu = json_decode($menu_json);
    $menu_error = json_last_error();

    $column_count = 1;

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Our Menu - Everest Spice Bristol</title>
    <meta name="description" content=" ">
    <?php include('head.php'); ?>

<script src="http://www.everestspicebristol.co.uk/bootstrap/js/bootstrap.js"></script>
<link href="http://www.everestspicebristol.co.uk/bootstrap/css/bootstrap.css" rel="stylesheet" />
<link href="http://www.everestspicebristol.co.uk/font-awesome/css/all.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Varela+Round&display=swap" rel="stylesheet"> 
<link href="http://www.everestspicebristol.co.uk/css/style.css" rel="stylesheet" /></head>
</head>

<body>
    <div id="header" class="inner">
        <div class="stuck">
            <?php include('header.php'); ?>
        </div>
        <h2>Our Menu</h2>
    </div>

    <div class="menuNotice">
        <p><strong>Note: "Our food may contain allergens (or traces) including Nuts, Celery, Gluten, Lupin, Milk, Mustard, Almond, Sesame Seeds, Soya, Egg,Sulphites. Please check the menu description carefully or call the restaurant before you order if you have specific dietary requirements."</strong></p>
        <ul>
            <li><span class="chilly-1"></span> Medium</li>
            <li><span class="chilly-2"></span> Hot</li>
            <li><span class="chilly-3"></span> Very Hot</li>
            <li><span class="veg"></span> Veg</li>
            <li><span class="nuts"></span> Nuts</li>
        </ul>
    </div>

    <div class="page">
        <div class="container">
            <div class="row">
                    <?php
                        if ($menu === null && $menu_error === "JSON_ERROR_UTF8") {
                            echo "Menu Temporarily Unavailable. Please try again later.";
                        } else {
                            foreach ($menu->sections as $section) {
                                if($column_count % 2) {
                    ?>
                                    <div class="col-sm-6">
                    <?php
                                }
                    ?>
                                    <div class="menuBlock">
                                        <h2><?php echo $section->sectionName; ?></h2>
                                        <p><?php echo $section->sectionDescription; ?></p>
                                        <ul class="row">
                                            <li class="col-md-6 col-12">
                                                <?php
                                                    foreach ($section->sectionItems as $items) {
                                                ?>
                                                        <div class="menuItem">
                                                            <h4>
                                                                <?php echo $items->itemName; ?>
                                                                &nbsp;
                                                                <?php
                                                                    if ($items->itemSpiceInfo) {
                                                                        echo getAllergenAndSpiceInfo($items->itemAllergenInfo);
                                                                    }
                                                                    if ($items->itemSpiceInfo) {
                                                                        echo getAllergenAndSpiceInfo($items->itemSpiceInfo);
                                                                    }
                                                                ?>
                                                            </h4>
                                                            <?php
                                                                    if ($items->itemDescription) {
                                                                        echo "<div class='menuDesc'>{$items->itemDescription}</div>";
                                                                    }
                                                                    if ($items->itemPrice) {
                                                                        echo "<div class='price'>{$items->itemPrice}</div>";
                                                                    }
                                                            ?>
                                                        </div>
                                                <?php
                                                    }
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                    <?php
                                if($column_count % 2) {
                    ?>
                                    </div>
                    <?php
                                }                                
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <?php include('footer.php'); ?>
    </div>

</body>

</html>