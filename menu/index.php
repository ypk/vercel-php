<?php
$page = basename($_SERVER['SCRIPT_NAME']);

$column_count = 1;

// $menu_json = file_get_contents("./
// menu.json");
// $menu = json_decode($menu_json, true);

// echo $menu_json;
// echo $menu;

// if ($menu_json === FALSE || ($menu === null && json_last_error() !== JSON_ERROR_NONE)) {
//     $menu_error = true;
// } else {
//     $menu_error = false;
// }

function getAllergenAndSpiceInfo($items, $multipleSpiceOptions = false)
{
    $allergenAndSpiceInfo = "";
    if (is_array($items)) {
        foreach ($items as $key => $item) {
            $allergenAndSpiceItem = strtolower($item);
            $allergenAndSpiceInfo .= "<span class='${allergenAndSpiceItem}'></span>";
            if ($multipleSpiceOptions && !($key === array_key_last($items))) {
                $allergenAndSpiceInfo .= "&nbsp;or&nbsp;";
            }
        }
    }
    return $allergenAndSpiceInfo;
}

$menu_json = '{
    "sections": [
      {
        "name": "Appetisers",
        "description": "",
        "items": [
          {
            "name": "Aloo Chat Puree",
            "allergenInfo": ["Celeriac", "Gluten"],
            "spiceInfo": ["Mild"],
            "description": "",
            "price": "4.50"
          },
          {
            "name": "Prawn Puree",
            "allergenInfo": ["Celeriac", "Gluten"],
            "spiceInfo": ["Medium"],
            "multipleSpiceOptions": true,
            "description": "Succulent prawns, spiced, served with a puree",
            "price": "4.50"
          },
          {
            "name": "Chicken Chat",
            "allergenInfo": [],
            "spiceInfo": ["Mild", "Medium"],
            "multipleSpiceOptions": true,
            "description": "Chicken cooked with cucumber in special spices known as Chat Masala",
            "price": "4.50"
          },
          {
            "name": "Onion Bhaji",
            "allergenInfo": [],
            "spiceInfo": ["Mild"],
            "description": "Sliced onion mixed with gram flour and herbs, deep fried",
            "price": "2.50"
          },
          {
            "name": "Samossa Chicken",
            "allergenInfo": ["Gluten"],
            "spiceInfo": ["Mild"],
            "description": "Traditional triangle pastry served with tamarind sauce",
            "price": "3.45"
          },
          {
            "name": "Samossa Veg",
            "allergenInfo": ["Gluten"],
            "spiceInfo": ["Mild"],
            "description": "Traditional triangle pastry served with tamarind sauce",
            "price": "3.45"
          },
          {
            "name": "Mix Kebab",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Mild"],
            "description": "Chicken Tikka, Lamb Tikka, sheik Kebab",
            "price": "4.50"
          },
          {
            "name": "Tandoori Chicken",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Mild"],
            "description": "Spring Chicken marinated in special recipe and barbecued in clay oven",
            "price": "4.50"
          },
          {
            "name": "Chicken Tikka",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Mild"],
            "description": "Boneless chicken marinated in a special recipe and barbecued in the clay oven",
            "price": "4.50"
          },
          {
            "name": "Lamb Tikka",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Mild"],
            "description": "Lamb marinated in a special recipe and barbecued in the clay oven",
            "price": "4.50"
          },
          {
            "name": "Shiek Kebab",
            "allergenInfo": [],
            "spiceInfo": ["Mild"],
            "description": "Lamb mince with onion special herbs and spices",
            "price": "4.50"
          },
          {
            "name": "Shami Kebab",
            "allergenInfo": [],
            "spiceInfo": ["Mild"],
            "description": "Minced lamb cooked with Kashmiri spices patties",
            "price": "4.50"
          },
          {
            "name": "Chicken Pakora",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Mild"],
            "description": "Spiced chicken with gram flour and herbs, deep fried in ghee",
            "price": "4.50"
          },
          {
            "name": "Garlic Chicken Tikka",
            "allergenInfo": [],
            "spiceInfo": ["Mild"],
            "description": "Chicken marinated in garlic, green chillies, fresh coriander, cooked in clay oven and served with salad",
            "price": "4.60"
          },
          {
            "name": "Chicken Momo",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Mild"],
            "description": "Fresh homemade chicken minced steamed Momo / dumplings (contains sesame seeds) served with chef&quot;s special sauce",
            "price": "5.50"
          },
          {
            "name": "Vegetable Momo",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Mild"],
            "description": "Fresh homemade vegetable minced steamed Momo / dumplings (contains sesame seeds) served with chef&quot;s special sauce",
            "price": "5.50"
          },
          {
            "name": "Chilli Chicken",
            "allergenInfo": ["Gluten", "Soya"],
            "spiceInfo": ["Hot"],
            "description": "Chicken pieces deep fried and tossed up with chillies, peppers and onion",
            "price": "4.50"
          },
          {
            "name": "Paneer Tikka",
            "allergenInfo": ["Gluten"],
            "spiceInfo": ["Mild"],
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
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Medium"],
            "description": "Grilled Chicken marinated with yoghurt, mint, tandoori paste and Kashmiri masala with herbs",
            "price": "8.95"
          },
          {
            "name": "Lamb Tikka",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Medium"],
            "description": "Grilled Lamb marinated with yoghurt, mint, tandoori paste and Kashmiri masala with herbs",
            "price": "8.95"
          },
          {
            "name": "Paneer Tikka",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Medium"],
            "description": "Grilled Paneer marinated with yoghurt, mint, tandoori paste and Kashmiri masala with herbs",
            "price": "8.95"
          },
          {
            "name": "Tandoor Chicken",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Medium"],
            "description": "Spring chicken marinated in special recipe and barbecued in the clay oven",
            "price": "8.95"
          },
          {
            "name": "Chicken Shaslik",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Medium"],
            "description": "Pieces of Chicken marinated and barbecued in the clay oven with tomato, onion and capsicum",
            "price": "8.95"
          },
          {
            "name": "Lamb Shaslik",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Medium"],
            "description": "Pieces of Lamb marinated and barbecued in the clay oven with tomato, onion and capsicum",
            "price": "8.95"
          },
          {
            "name": "Paneer Shaslik",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Medium"],
            "description": "Pieces of Paneer marinated and barbecued in the clay oven with tomato, onion and capsicum",
            "price": "8.95"
          },
          {
            "name": "Tandoori Mixed Grill",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Medium"],
            "description": "Tandoori chicken, lamb tikka, chicken tikka, sheik kebab and plain naan",
            "price": "11.95"
          },
          {
            "name": "Garlic Chicken Tikka",
            "allergenInfo": ["Milk"],
            "spiceInfo": ["Hot"],
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
            "spiceInfo": ["Medium"],
            "description": "Tender pieces of chicken, lamb and minced meat in medium Bhuna sauce",
            "price": "9.95"
          },
          {
            "name": "Murghi Masala",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "On the bone spring chicken, marinated and grilled in clay oven cooked in medium chef special sauce with fresh spring onion",
            "price": "9.95"
          },
          {
            "name": "Shaslik Bhuna Chicken",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Grilled chicken Tikka cooked with onion pepper and tomato in a medium sauce",
            "price": "9.95"
          },
          {
            "name": "Shaslik Bhuna Lamb",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Grilled lamb Tikka cooked with onion pepper and tomato in a medium sauce",
            "price": "9.95"
          },
          {
            "name": "Salmon Palak",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Cooked with fresh spinach, garlic, tomato and coriander in a medium sauce",
            "price": "10.95"
          },
          {
            "name": "Salmon Chilli Karahi",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Cooked with fresh ginger, green chilli pepper spring onion and coriander in a medium hot sauce",
            "price": "10.95"
          },
          {
            "name": "King Prawn Goa",
            "allergenInfo": [],
            "spiceInfo": ["Mild"],
            "description": "King prawn, mild in a special cooked original recipe from Goa",
            "price": "14.95"
          },
          {
            "name": "Rosni Bahar Chicken",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Cooked with fresh garlic chunk onion in pepper in thick medium sauce",
            "price": "9.95"
          },
          {
            "name": "Rosni Bahar Lamb",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Cooked with fresh garlic chunk onion in pepper in thick medium sauce",
            "price": "9.95"
          },
          {
            "name": "Lahori Fish",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Sweet water fish cooked with fresh garlic, ginger, spring onion in a medium bhuna sauce",
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
          }
        ]
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
            "allergenInfo": ["Celeriac"],
            "spiceInfo": [],
            "description": "Spinach and potatoes",
            "price": "3.95"
          },
          {
            "name": "Chana Masala",
            "allergenInfo": ["Celeriac"],
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
            "allergenInfo": ["Milk", "Celeriac"],
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
        "name": "Chef\'s Specialities",
        "description": "",
        "items": [
          {
            "name": "Tandoori Butter",
            "allergenInfo": [],
            "spiceInfo": ["Mild"],
            "description": "Cooked with butter and fresh cream in a thick mild sauce",
            "price": ""
          },
          {
            "name": "Passanda",
            "allergenInfo": [],
            "spiceInfo": ["Mild"],
            "description": "Cooked with yoghurt, ground almonds and coconut in aromatic mild sauce",
            "price": ""
          },
          {
            "name": "Massala",
            "allergenInfo": [],
            "spiceInfo": ["Mild"],
            "description": "Cooked with almonds and coconuts in a aromatic mild sauce",
            "price": ""
          },
          {
            "name": "Karahi",
            "allergenInfo": [],
            "spiceInfo": ["Mild"],
            "description": "Cooked with onions, peppers tomatoes and ginger in a medium sauce",
            "price": ""
          },
          {
            "name": "Rezzala",
            "allergenInfo": [],
            "spiceInfo": ["Mild"],
            "description": "Vegetables cooked with yoghurt onions and fresh green chillies in a medium hot sauce",
            "price": ""
          },
          {
            "name": "Garlic Chilli",
            "allergenInfo": [],
            "spiceInfo": ["Hot"],
            "description": "Cooked with slice of garlic and fresh green chillies in a thick fairly hot sauce",
            "price": ""
          },
          {
            "name": "Jalferazi",
            "allergenInfo": [],
            "spiceInfo": ["Hot"],
            "description": "Cooked with onions peppers and fresh green chillies in a fairly hot sauce",
            "price": ""
          },
          {
            "name": "Jaipuri",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Cooked with mushrooms, peppers, and spring onions in a medium sauce",
            "price": ""
          },
          {
            "name": "Nihari",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Cooked with succulent pieces of meat, infused with ginger and coriander in a medium sauce",
            "price": ""
          },
          {
            "name": "Burkani",
            "allergenInfo": [],
            "spiceInfo": ["Hot"],
            "description": "Cooked in a home style with ginger, garlic, chillies and finished with coriander in a hot sauce",
            "price": ""
          },
          {
            "name": "Hara",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Cooked with tamarind, red chillies and very special spice in a sweet and sour sauce",
            "price": ""
          },
          {
            "name": "Pudina",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Cooked with mint, mango chutney, red chillies, spring onion and special spice in a medium sauce",
            "price": ""
          },
          {
            "name": "Naga",
            "allergenInfo": [],
            "spiceInfo": ["Hot"],
            "description": "Cooked in bhuna style with very hot sauce",
            "price": "",
            "variants": [
                {
                  "name": "Chicken",
                  "price": "8.25"
                },
                {
                  "name": "Lamb",
                  "price": "8.25"
                },
                {
                  "name": "King Prawns",
                  "price": "13.95"
                },
                {
                  "name": "Chicken Tikka",
                  "price": "8.95"
                },
                {
                  "name": "Lamb Tikka",
                  "price": "8.95"
                },
                {
                  "name": "Vegetables",
                  "price": "7.95"
                },
                {
                  "name": "Panner",
                  "price": "8.25"
                },
                {
                  "name": "Prawns",
                  "price": "7.95"
                }
              ]
          }
        ]
      },
      {
        "name": "Traditional Dishes",
        "description": "",
        "items": [
          {
            "name": "Curry",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "The medium strength and favourite dish of all time",
            "price": ""
          },
          {
            "name": "Madras",
            "allergenInfo": ["Celeriac"],
            "spiceInfo": ["Hot"],
            "description": "A popular dish prepared with chilli and lemon juice",
            "price": ""
          },
          {
            "name": "Vindaloo",
            "allergenInfo": [],
            "spiceInfo": ["Hot"],
            "description": "A hot taste, red peppers, potato, lemon and dozens of spices added to qualify this dish as a most extravagantly hot dish",
            "price": ""
          },
          {
            "name": "Korma",
            "allergenInfo": ["Nuts", "Milk"],
            "spiceInfo": ["Mild"],
            "description": "A very mild dish cooked in coconut, almond, cream and special korma sauce",
            "price": ""
          },
          {
            "name": "Bhuna",
            "allergenInfo": ["Celeriac"],
            "spiceInfo": ["Medium"],
            "description": "Thoroughly garnished dish cooked with onion, capsicum, tomatoes, medium spiced (thick sauce)",
            "price": ""
          },
          {
            "name": "Ceylon",
            "allergenInfo": [],
            "spiceInfo": ["Medium", "Hot"],
            "multipleSpiceOptions": true,
            "description": "Cooked with fairly hot spices and coconut",
            "price": ""
          },
          {
            "name": "Dopiaza",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Cooked with chopped onions and seasoned with fresh herbs",
            "price": ""
          },
          {
            "name": "Rogan Josh",
            "allergenInfo": ["Celeriac"],
            "spiceInfo": ["Medium"],
            "description": "Medium strength spiced and garnished with tomatoes, onions and spice",
            "price": ""
          },
          {
            "name": "Saag",
            "allergenInfo": [],
            "spiceInfo": ["Medium"],
            "description": "Cooked with fresh spinach and a tough of garlic and herbs",
            "price": ""
          },
          {
            "name": "Dansak",
            "allergenInfo": [],
            "spiceInfo": ["Medium", "Hot"],
            "multipleSpiceOptions": true,
            "description": "Cooked with lentils, lemon juice and fresh spices, hot, sweet and sour",
            "price": ""
          },
          {
            "name": "Pathia",
            "allergenInfo": [],
            "spiceInfo": ["Mild", "Hot"],
            "multipleSpiceOptions": true,
            "description": "Sweet and sour dish with onions, tomatoes and fresh spices",
            "price": ""
          },
          {
            "name": "Balti",
            "allergenInfo": "",
            "spiceInfo": [],
            "description": "",
            "price": ""
          },
          {
            "name": "Bombay",
            "allergenInfo": "",
            "spiceInfo": [],
            "description": "",
            "price": ""
          },
          {
            "name": "Honey",
            "allergenInfo": "",
            "spiceInfo": [],
            "description": "",
            "price": "",
            "variants": [
              {
                "name": "Chicken",
                "price": "8.25"
              },
              {
                "name": "Lamb",
                "price": "8.25"
              },
              {
                "name": "King Prawns",
                "price": "13.95"
              },
              {
                "name": "Chicken Tikka",
                "price": "8.95"
              },
              {
                "name": "Lamb Tikka",
                "price": "8.95"
              },
              {
                "name": "Vegetables",
                "price": "7.95"
              },
              {
                "name": "Panner",
                "price": "8.25"
              },
              {
                "name": "Prawns",
                "price": "7.95"
              }
            ]
          }
        ]
      },
      {
        "name": "Tandoori Bread",
        "description": "",
        "items": [
          {
            "name": "Plain Naan",
            "allergenInfo": ["Gluten", "Milk"],
            "spiceInfo": [],
            "description": "Plain leavened bread",
            "price": "2.80"
          },
          {
            "name": "Keema Naan",
            "allergenInfo": ["Gluten", "Milk"],
            "spiceInfo": [],
            "description": "Spicy minced lamb",
            "price": "3.20"
          },
          {
            "name": "Peshawar Naan",
            "allergenInfo": ["Gluten", "Nuts", "Milk"],
            "spiceInfo": [],
            "description": "Coconut and almond",
            "price": "3.20"
          },
          {
            "name": "Garlic Naan",
            "allergenInfo": ["Gluten", "Milk"],
            "spiceInfo": [],
            "description": "Garlic and coriander",
            "price": "3.20"
          },
          {
            "name": "Kulsa Naan",
            "allergenInfo": ["Gluten", "Milk"],
            "spiceInfo": [],
            "description": "Onion and coriander",
            "price": "3.20"
          },
          {
            "name": "Cheese Naan",
            "allergenInfo": ["Gluten", "Milk"],
            "spiceInfo": [],
            "description": "",
            "price": "3.20"
          },
          {
            "name": "Tandoori Roti",
            "allergenInfo": ["Gluten"],
            "spiceInfo": [],
            "description": "",
            "price": "3.20"
          },
          {
            "name": "Paratha",
            "allergenInfo": ["Gluten", "Milk"],
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
            "allergenInfo": ["Milk"],
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
    ]
  }
  ';

$menu = json_decode($menu_json);
$menu_error = json_last_error();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Our Menu - Everest Spice Bristol</title>
    <meta name="description" content=" ">
    <?php include('head.php'); ?>
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
                if ($menu_error) {
                    echo "Menu Temporarily Unavailable. Please try again later.";
                } else {
                    foreach ($menu->sections as $section) {
                        if ($column_count % 2) {
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
                                            <div class="menuItem <?php echo isset($items->variants) ? 'menuVariants' : '' ?>">
                                                <h4>
                                                    <?php echo $items->name; ?>
                                                    &nbsp;
                                                    <?php
                                                    if (isset($items->allergenInfo)) {
                                                        echo getAllergenAndSpiceInfo($items->allergenInfo);
                                                    }
                                                    if (isset($items->spiceInfo)) {
                                                        if (isset($items->multipleSpiceOptions)) {
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
                                            ?>
                                                <h4 class="variant-heading">All Dishes available in:</h4>
                                                <?php
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
                                                            echo "<div class='price'>&pound;{$variants->price}</div>";
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
                            if ($column_count % 2) {
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