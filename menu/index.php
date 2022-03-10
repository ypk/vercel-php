<?php

    $page = basename($_SERVER['SCRIPT_NAME']);

    $menu_json = '{
        "sections": [
        {
            "name": "Appetisers",
            "description": "",
            "items": [
            {
                "name": "Aloo Chat Puree",
                    "allergenInfo": [
                    "Celeriac",
                    "Gluten"
                ],
                "spiceInfo": [
                    "Mild"
                ],
                "description": "",
                "price": "4.50"
            },
            {
                "name": "Prawn Puree",
                "allergenInfo": [
                "Celeriac",
                "Gluten"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "multipleSpiceOptions": true,
                "description": "Succulent prawns, spiced, served with a puree",
                "price": "4.50"
            },
            {
                "name": "Chicken Chat",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild",
                "Medium"
                ],
                "multipleSpiceOptions": true,
                "description": "Chicken cooked with cucumber in special spices known as Chat Masala",
                "price": "4.50"
            },
            {
                "name": "Onion Bhaji",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Sliced onion mixed with gram flour and herbs, deep fried",
                "price": "2.50"
            },
            {
                "name": "Samossa Chicken",
                "allergenInfo": [
                "Gluten"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Traditional triangle pastry served with tamarind sauce",
                "price": "3.45"
            },
            {
                "name": "Samossa Veg",
                "allergenInfo": [
                "Gluten"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Traditional triangle pastry served with tamarind sauce",
                "price": "3.45"
            },
            {
                "name": "Mix Kebab",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Chicken Tikka, Lamb Tikka, sheik Kebab",
                "price": "4.50"
            },
            {
                "name": "Tandoori Chicken",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Spring Chicken marinated in special recipe and barbecued in clay oven",
                "price": "4.50"
            },
            {
                "name": "Chicken Tikka",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Boneless chicken marinated in a special recipe and barbecued in the clay oven",
                "price": "4.50"
            },
            {
                "name": "Lamb Tikka",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Lamb marinated in a special recipe and barbecued in the clay oven",
                "price": "4.50"
            },
            {
                "name": "Shiek Kebab",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Lamb mince with onion special herbs and spices",
                "price": "4.50"
            },
            {
                "name": "Shami Kebab",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Minced lamb cooked with Kashmiri spices patties",
                "price": "4.50"
            },
            {
                "name": "Chicken Pakora",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Spiced chicken with gram flour and herbs, deep fried in ghee",
                "price": "4.50"
            },
            {
                "name": "Garlic Chicken Tikka",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Chicken marinated in garlic, green chillies, fresh coriander, cooked in clay oven and served with salad",
                "price": "4.60"
            },
            {
                "name": "Chicken Momo",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Fresh homemade chicken minced steamed Momo / dumplings (contains sesame seeds) served with chef&quot;s special sauce",
                "price": "5.50"
            },
            {
                "name": "Vegetable Momo",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Fresh homemade vegetable minced steamed Momo / dumplings (contains sesame seeds) served with chef&quot;s special sauce",
                "price": "5.50"
            },
            {
                "name": "Chilli Chicken",
                "allergenInfo": [
                "Gluten",
                "Soya"
                ],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Chicken pieces deep fried and tossed up with chillies, peppers and onion",
                "price": "4.50"
            },
            {
                "name": "Paneer Tikka",
                "allergenInfo": [
                "Gluten"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Cottage cheese cubes marinated with yogurt, peppers and picking spice",
                "price": "4.50"
            }
            ]
        },
        {
            "name": "Tandoori Dishes",
            "description": "The following dishes are served with salad and mint sauce",
            "items": [
            {
                "name": "Chicken Tikka",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Grilled Chicken marinated with yoghurt, mint, tandoori paste and Kashmiri masala with herbs",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Grilled Lamb marinated with yoghurt, mint, tandoori paste and Kashmiri masala with herbs",
                "price": "8.95"
            },
            {
                "name": "Paneer Tikka",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Grilled Paneer marinated with yoghurt, mint, tandoori paste and Kashmiri masala with herbs",
                "price": "8.95"
            },
            {
                "name": "Tandoor Chicken",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Spring chicken marinated in special recipe and barbecued in the clay oven",
                "price": "8.95"
            },
            {
                "name": "Chicken Shaslik",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Pieces of Chicken marinated and barbecued in the clay oven with tomato, onion and capsicum",
                "price": "8.95"
            },
            {
                "name": "Lamb Shaslik",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Pieces of Lamb marinated and barbecued in the clay oven with tomato, onion and capsicum",
                "price": "8.95"
            },
            {
                "name": "Paneer Shaslik",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Pieces of Paneer marinated and barbecued in the clay oven with tomato, onion and capsicum",
                "price": "8.95"
            },
            {
                "name": "Tandoori Mixed Grill",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Tandoori chicken, lamb tikka, chicken tikka, sheik kebab and plain naan",
                "price": "11.95"
            },
            {
                "name": "Garlic Chicken Tikka",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Chicken marinated in garlic green chillies, fresh coriander, cooked in the clay oven and served with salad",
                "price": "8.95"
            }
            ]
        },
        {
            "name": "Everest Specials",
            "description": "",
            "items": [
            {
                "name": "Mix Bhuna Nawabi",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Tender pieces of chicken, lamb and minced meat in medium Bhuna sauce",
                "price": "9.95"
            },
            {
                "name": "Murghi Masala",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "On the bone spring chicken, marinated and grilled in clay oven cooked in medium chef special sauce with fresh spring onion",
                "price": "9.95"
            },
            {
                "name": "Shaslik Bhuna Chicken",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Grilled chicken Tikka cooked with onion pepper and tomato in a medium sauce",
                "price": "9.95"
            },
            {
                "name": "Shaslik Bhuna Lamb",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Grilled lamb Tikka cooked with onion pepper and tomato in a medium sauce",
                "price": "9.95"
            },
            {
                "name": "Salmon Palak",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Cooked with fresh spinach, garlic, tomato and coriander in a medium sauce",
                "price": "10.95"
            },
            {
                "name": "Salmon Chilli Karahi",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Cooked with fresh ginger, green chilli pepper spring onion and coriander in a medium hot sauce",
                "price": "10.95"
            },
            {
                "name": "King Prawn Goa",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "King prawn, mild in a special cooked original recipe from Goa",
                "price": "14.95"
            },
            {
                "name": "Rosni Bahar Chicken",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Cooked with fresh garlic chunk onion in pepper in thick medium sauce",
                "price": "9.95"
            },
            {
                "name": "Rosni Bahar Lamb",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Cooked with fresh garlic chunk onion in pepper in thick medium sauce",
                "price": "9.95"
            },
            {
                "name": "Lahori Fish",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Sweet water fish cooked with fresh garlic, ginger, spring onion in a medium bhuna sauce",
                "price": "10.95"
            }
            ]
        },
        {
            "name": "Biryani Dishes",
            "description": "Safran rice treated together with meat, chicken or prawns in butter, spices and herbs, served with vegetable curry or Raita",
            "items": [
            {
                "name": "Chicken Biryani",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb  Biryani",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "King Prawn Biryani",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Biryani",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "9.95"
            },
            {
                "name": "Lamb Tikka Biryani",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "9.95"
            },
            {
                "name": "Vegetable Biryani",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Special Mixed Biryani",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "10.95"
            }
            ]
        },
        {
            "name": "Biryani Dishes",
            "description": "",
            "items": [
            {
                "name": "Biryani",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Safran rice treated together with meat, chicken or prawns in butter, spices and herbs, served with vegetable curry or Raita",
                "price": "",
                "variants": [
                    {
                        "name": "Chicken",
                        "price": "8.95"
                    },
                    {
                        "name": "Lamb",
                        "price": "8.95"
                    },
                    {
                        "name": "King Prawn",
                        "price": "13.95"
                    },
                    {
                        "name": "Chicken Tikka",
                        "price": "9.95"
                    },
                    {
                        "name": "Lamb Tikka",
                        "price": "9.95"
                    },
                    {
                        "name": "Vegetable",
                        "price": "7.95"
                    },
                    {
                        "name": "Special Mixed",
                        "description": "With Chicken, Lamb & Prawn",
                        "price": "10.95"
                    }
                ]
            }]
        },
        {
            "name": "Side Dishes",
            "description": "",
            "items": [
            {
                "name": "Mushroom Bhaji",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "3.95"
            },
            {
                "name": "Sag Bhaji",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Spinach",
                "price": "3.95"
            },
            {
                "name": "Bombay Aloo",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Spicy potatoes",
                "price": "3.95"
            },
            {
                "name": "Sag Aloo",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [],
                "description": "Spinach and potatoes",
                "price": "3.95"
            },
            {
                "name": "Chana Masala",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [],
                "description": "Chickpeas",
                "price": "3.95"
            },
            {
                "name": "Tarka Dall",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Lentils",
                "price": "3.95"
            },
            {
                "name": "Sag Paneer",
                "allergenInfo": [
                "Milk",
                "Celeriac"
                ],
                "spiceInfo": [],
                "description": "Spinach with cheese",
                "price": "3.95"
            },
            {
                "name": "Sag Dall",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Spinach with lentils",
                "price": "3.95"
            }
            ]
        },
        {
            "name": "Chef&quot;s Specialities",
            "description": "",
            "items": [
            {
                "name": "Chicken Tandoori Butter",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Chicken cooked with butter and fresh cream in a thick mild sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Tandoori Butter",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Lamb cooked with butter and fresh cream in a thick mild sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Tandoori Butter",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "King Prawns cooked with butter and fresh cream in a thick mild sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Tandoori Butter",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Chicken Tikka cooked with butter and fresh cream in a thick mild sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Tandoori Butter",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Lamb Tikka cooked with butter and fresh cream in a thick mild sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Tandoori Butter",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Vegetables cooked with butter and fresh cream in a thick mild sauce",
                "price": "7.95"
            },
            {
                "name": "Chicken Passanda",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Chicken cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Passanda",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Lamb cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Passanda",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "King Prawns cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Passanda",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Chicken Tikka cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Passanda",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Lamb Tikka cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Passanda",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Vegetables cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
                "price": "7.95"
            },
            {
                "name": "Chicken Massala",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Chicken cooked with almonds and coconuts in a aromatic mild sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Massala",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Lamb cooked with almonds and coconuts in a aromatic mild sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Massala",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "King Prawns cooked with almonds and coconuts in a aromatic mild sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Massala",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Chicken Tikka cooked with almonds and coconuts in a aromatic mild sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Massala",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Lamb Tikka cooked with almonds and coconuts in a aromatic mild sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Massala",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Vegetables cooked with almonds and coconuts in a aromatic mild sauce",
                "price": "7.95"
            },
            {
                "name": "Chicken Karahi",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Chicken cooked with onions, peppers tomatoes and ginger in a medium sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Karahi",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Lamb cooked with onions, peppers tomatoes and ginger in a medium sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Karahi",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "King Prawns cooked with onions, peppers tomatoes and ginger in a medium sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Karahi",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Chicken Tikka cooked with onions, peppers tomatoes and ginger in a medium sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Karahi",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Lamb Tikka cooked with onions, peppers tomatoes and ginger in a medium sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Karahi",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Vegetables cooked with onions, peppers tomatoes and ginger in a medium sauce",
                "price": "7.95"
            },
            {
                "name": "Chicken Rezzala",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Chicken cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Rezzala",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Lamb cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Rezzala",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "King Prawns cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Rezzala",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Chicken Tikka cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Rezzala",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Lamb Tikka cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Rezzala",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild"
                ],
                "description": "Vegetables cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
                "price": "7.95"
            },
            {
                "name": "Chicken Garlic Chilli",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Chicken cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Garlic Chilli",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Lamb cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Garlic Chilli",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "King Prawns cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Garlic Chilli",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Chicken Tikka cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Garlic Chilli",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Lamb Tikka cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Garlic Chilli",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Vegetables cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
                "price": "7.95"
            },
            {
                "name": "Chicken Jalferazi",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Chicken cooked with onions peppers and fresh green chillies in a fairly hot sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Jalferazi",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Lamb cooked with onions peppers and fresh green chillies in a fairly hot sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Jalferazi",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "King Prawns cooked with onions peppers and fresh green chillies in a fairly hot sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Jalferazi",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Chicken Tikka cooked with onions peppers and fresh green chillies in a fairly hot sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Jalferazi",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Lamb Tikka cooked with onions peppers and fresh green chillies in a fairly hot sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Jalferazi",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Vegetables cooked with onions peppers and fresh green chillies in a fairly hot sauce",
                "price": "7.95"
            },
            {
                "name": "Chicken Jaipuri",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Chicken cooked with mushrooms, peppers, and spring onions in a medium sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Jaipuri",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Lamb cooked with mushrooms, peppers, and spring onions in a medium sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Jaipuri",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "King Prawns cooked with mushrooms, peppers, and spring onions in a medium sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Jaipuri",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Chicken Tikka cooked with mushrooms, peppers, and spring onions in a medium sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Jaipuri",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Lamb Tikka cooked with mushrooms, peppers, and spring onions in a medium sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Jaipuri",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Vegetables cooked with mushrooms, peppers, and spring onions in a medium sauce",
                "price": "7.95"
            },
            {
                "name": "Chicken Nihari",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Chicken cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Nihari",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Lamb cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Nihari",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "King Prawns cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Nihari",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Chicken Tikka cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Nihari",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Lamb Tikka cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Nihari",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Vegetables cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
                "price": "7.95"
            },
            {
                "name": "Chicken Burkani",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Chicken cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Burkani",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Lamb cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Burkani",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "King Prawns cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Burkani",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Chicken Tikka cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Burkani",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Lamb Tikka cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Burkani",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Vegetables cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
                "price": "7.95"
            },
            {
                "name": "Chicken Hara",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Chicken cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Hara",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Lamb cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Hara",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "King Prawns cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Hara",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Chicken Tikka cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Hara",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Lamb Tikka cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Hara",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Vegetables cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
                "price": "7.95"
            },
            {
                "name": "Chicken Pudina",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Chicken cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Pudina",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Lamb cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Pudina",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "King Prawns cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Pudina",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Chicken Tikka cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Pudina",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Lamb Tikka cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Pudina",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "Vegetables cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
                "price": "7.95"
            },
            {
                "name": "Chicken Naga",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Chicken cooked in bhuna style with very hot sauce",
                "price": "8.25"
            },
            {
                "name": "Lamb Naga",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Lamb cooked in bhuna style with very hot sauce",
                "price": "8.25"
            },
            {
                "name": "King Prawns Naga",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "King Prawns cooked in bhuna style with very hot sauce",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Naga",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Chicken Tikka cooked in bhuna style with very hot sauce",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Naga",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Lamb Tikka cooked in bhuna style with very hot sauce",
                "price": "8.95"
            },
            {
                "name": "Vegetable Naga",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "Vegetables cooked in bhuna style with very hot sauce",
                "price": "7.95"
            }
            ]
        },
        {
            "name": "Traditional Dishes",
            "description": "<ul class=\"section-descripton\"><li>Curry: The medium strength and favourite dish of all time</li>            <li>Madras: A popular dish prepared with chilli and lemon juice</li>            <li>Vindaloo: A hot taste, red peppers, potato, lemon and dozens of spices added to qualify this dish as a most extravagantly hot dish</li>            <li>Korma: A very mild dish cooked in coconut, almond, cream and special korma sauce</li>            <li>Bhuna: Thoroughly garnished dish cooked with onion, capsicum, tomatoes, medium spiced (thick sauce)</li>            <li>Ceylon: Cooked with fairly hot spices and coconut</li>            <li>Dopiaza: Cooked with chopped onions and seasoned with fresh herbs</li>            <li>Rogan Josh: Medium strength spiced and garnished with tomatoes, onions and spice</li>             <li>Saag: Cooked with fresh spinach and a tough of garlic and herbs</li>            <li>Dansak: Cooked with lentils, lemon juice and fresh spices, hot, sweet and sour</li>            <li>Pathia: Sweet and sour dish with onions, tomatoes and fresh spices</li></ul>",
            "items": [
            {
                "name": "Chicken Curry",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Curry",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Curry",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Curry",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Curry",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Curry",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Madras",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Hot"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Madras",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Hot"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Madras",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Hot"
                ],
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Madras",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Hot"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Madras",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Hot"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Madras",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Hot"
                ],
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Vindaloo",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Vindaloo",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Vindaloo",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Vindaloo",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Vindaloo",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Vindaloo",
                "allergenInfo": [],
                "spiceInfo": [
                "Hot"
                ],
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Korma",
                "allergenInfo": [
                "Nuts",
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Korma",
                "allergenInfo": [
                "Nuts",
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Korma",
                "allergenInfo": [
                "Nuts",
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Korma",
                "allergenInfo": [
                "Nuts",
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Korma",
                "allergenInfo": [
                "Nuts",
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Korma",
                "allergenInfo": [
                "Nuts",
                "Milk"
                ],
                "spiceInfo": [
                "Mild"
                ],
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Bhuna",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Bhuna",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Bhuna",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Bhuna",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Bhuna",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Bhuna",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Ceylon",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Ceylon",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Ceylon",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Ceylon",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Ceylon",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Ceylon",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Dopiaza",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Dopiaza",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Dopiaza",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Dopiaza",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Dopiaza",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Dopiaza",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Rogan Josh",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Rogan Josh",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Rogan Josh",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Rogan Josh",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Rogan Josh",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Rogan Josh",
                "allergenInfo": [
                "Celeriac"
                ],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Saag",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Saag",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Saag",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Saag",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Saag",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Saag",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium"
                ],
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Dansak",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Dansak",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Dansak",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Dansak",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Dansak",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Dansak",
                "allergenInfo": [],
                "spiceInfo": [
                "Medium",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Pathia",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Pathia",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Pathia",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Pathia",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Pathia",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Pathia",
                "allergenInfo": [],
                "spiceInfo": [
                "Mild",
                "Hot"
                ],
                "multipleSpiceOptions": true,
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Balti",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Balti",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Balti",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Balti",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Balti",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Balti",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Bombay",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Bombay",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Bombay",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Bombay",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Bombay",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Bombay",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "7.95"
            },
            {
                "name": "Chicken Honey",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "Lamb Honey",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.25"
            },
            {
                "name": "King Prawn Honey",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "13.95"
            },
            {
                "name": "Chicken Tikka Honey",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Lamb Tikka Honey",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "8.95"
            },
            {
                "name": "Vegetable Honey",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "7.95"
            }
            ]
        },
        {
            "name": "Desserts",
            "description": "",
            "items": [
            {
                "name": "Handmade Carrot Cake",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "4.49"
            },
            {
                "name": "Chocolate Fudge Cake",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "4.49"
            },
            {
                "name": "Sticky Chocolate & Orange Cake",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "4.49"
            },
            {
                "name": "Ben & Jerry 500ML",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "6.99"
            }
            ]
        },
        {
            "name": "Tandoori Bread",
            "description": "",
            "items": [
            {
                "name": "Plain Naan",
                "allergenInfo": [
                "Gluten",
                "Milk"
                ],
                "spiceInfo": [],
                "description": "Plain leavened bread",
                "price": "2.80"
            },
            {
                "name": "Keema Naan",
                "allergenInfo": [
                "Gluten",
                "Milk"
                ],
                "spiceInfo": [],
                "description": "Spicy minced lamb",
                "price": "3.20"
            },
            {
                "name": "Peshawar Naan",
                "allergenInfo": [
                "Gluten",
                "Nuts",
                "Milk"
                ],
                "spiceInfo": [],
                "description": "Coconut and almond",
                "price": "3.20"
            },
            {
                "name": "Garlic Naan",
                "allergenInfo": [
                "Gluten",
                "Milk"
                ],
                "spiceInfo": [],
                "description": "Garlic and coriander",
                "price": "3.20"
            },
            {
                "name": "Kulsa Naan",
                "allergenInfo": [
                "Gluten",
                "Milk"
                ],
                "spiceInfo": [],
                "description": "Onion and coriander",
                "price": "3.20"
            },
            {
                "name": "Cheese Naan",
                "allergenInfo": [
                "Gluten",
                "Milk"
                ],
                "spiceInfo": [],
                "description": "",
                "price": "3.20"
            },
            {
                "name": "Tandoori Roti",
                "allergenInfo": [
                "Gluten"
                ],
                "spiceInfo": [],
                "description": "",
                "price": "3.20"
            },
            {
                "name": "Paratha",
                "allergenInfo": [
                "Gluten",
                "Milk"
                ],
                "spiceInfo": [],
                "description": "Butter Fried Layer Bread",
                "price": "2.80"
            },
            {
                "name": "Chapati",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "2.75"
            },
            {
                "name": "Chips",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "2.50"
            }
            ]
        },
        {
            "name": "Rice",
            "description": "",
            "items": [
            {
                "name": "Plain Rice",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Boiled rice",
                "price": "2.80"
            },
            {
                "name": "Pilau Rice",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Basmati rice",
                "price": "2.95"
            },
            {
                "name": "Special Fried Rice",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Cooked with eggs and peas",
                "price": "3.50"
            },
            {
                "name": "Coconut Rice",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "3.50"
            },
            {
                "name": "Mushroom Rice / Vegetable Rice",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "3.50"
            },
            {
                "name": "Egg Fried Rice",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "3.50"
            },
            {
                "name": "Keema Rice",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Minced lamb",
                "price": "3.50"
            },
            {
                "name": "Lemon Rice",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "3.50"
            },
            {
                "name": "Garlic Rice",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "3.50"
            }
            ]
        },
        {
            "name": "Poppadom & Pickle",
            "description": "",
            "items": [
            {
                "name": "Poppadom",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Plain and spicy",
                "price": "1.00"
            },
            {
                "name": "Raitha",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Onion or cucumber, yoghurt and black salt",
                "price": "1.40"
            },
            {
                "name": "Lime Pickle",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "0.80"
            },
            {
                "name": "Mango Pickle",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "0.80"
            },
            {
                "name": "Mint Yogurt Sauce",
                "allergenInfo": [
                "Milk"
                ],
                "spiceInfo": [],
                "description": "",
                "price": "0.80"
            },
            {
                "name": "Onion Salad",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "0.80"
            }
            ]
        },
        {
            "name": "Drinks",
            "description": "",
            "items": [
            {
                "name": "Can",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Coke / Diet Coke / Orange Fanta / 7up",
                "price": "1.00"
            },
            {
                "name": "Bottle 1.5L",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "Coke / Diet Coke",
                "price": "2.50"
            }
            ]
        },
        {
            "name": "Set Meals",
            "description": "Starters: Chicken Tikka, Onion Bhaji & Poppadom<br />Main Course: Chicken Tikka Masala, Lamb Madras, Sag Aloo, Boiled Rice & Naan",
            "items": [
            {
                "name": "Set Meal For Two",
                "allergenInfo": "",
                "spiceInfo": [],
                "description": "",
                "price": "29.95"
            }
            ]
        }
        ]}';

    function getAllergenAndSpiceInfo($items, $multipleSpiceOptions = false) {
        $allergenAndSpiceInfo = "";
        if (is_array($items)) {
            $counter = 0;
            foreach ($items as $key => $item) {
                $allergenAndSpiceItem = strtolower($item);

                $allergenAndSpiceInfo .= "<span class='${allergenAndSpiceItem}'></span>";
                
                if($multipleSpiceOptions && !($key === array_key_last($items))) {
                    $allergenAndSpiceInfo .= "&nbsp;or&nbsp;";
                }
                $counter++;
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
                                    <div class="col-12 col-md-6">
                    <?php
                                }
                    ?>
                                    <div class="menuBlock">
                                        <h2><?php echo $section->name; ?></h2>
                                        <p><?php echo $section->description; ?></p>
                                        <ul class="row">
                                            <li class="col-12">
                                                <?php
                                                    foreach ($section->items as $items) {
                                                ?>
                                                        <div class="menuItem">
                                                            <h4>
                                                                <?php echo $items->name; ?>
                                                                &nbsp;
                                                                <?php
                                                                    if (isset($items->allergenInfo)) {
                                                                        echo getAllergenAndSpiceInfo($items->allergenInfo);
                                                                    }
                                                                    if (isset($items->spiceInfo)) {
                                                                        if(isset($items->multipleSpiceOptions)){
                                                                            echo getAllergenAndSpiceInfo($items->spiceInfo, $items->multipleSpiceOptions);
                                                                        } else {
                                                                            echo getAllergenAndSpiceInfo($items->spiceInfo);
                                                                        }
                                                                    }
                                                                ?>
                                                            </h4>
                                                            <?php
                                                                    if (isset($items->description)) {
                                                                        echo "<div class='menuDesc'>{$items->description}</div>";
                                                                    }
                                                                    if (isset($items->price)) {
                                                                        echo "<div class='price'>{$items->price}</div>";
                                                                    }
                                                            ?>
                                                        </div>
                                                <?php
                                                        if (isset($items->variants)) {
                                                            foreach ($items->variants as $variants) {
                                                ?>
                                                                <div class="menuItem">
                                                                    <h4>
                                                                        <?php echo $variants->name; ?>
                                                                    </h4>
                                                                    <?php
                                                                        if (isset($variants->description)) {
                                                                            echo "<div class='menuDesc'>{$variants->description}</div>";
                                                                        }
                                                                        if (isset($variants->price)) {
                                                                            echo "<div class='price'>{$variants->price}</div>";
                                                                        }
                                                                    ?>
                                                                </div>
                                                <?php
                                                            }
                                                        }
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