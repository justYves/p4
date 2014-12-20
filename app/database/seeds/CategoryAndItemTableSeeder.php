<?php
 
class CategoryAndItemTableSeeder extends Seeder {
 
  public function run()
  {

  	#Categories Table
  	$basics  = new Category;
  	$basics->name = 'Basics';
  	$basics->save();

  	$baking = new Category;
  	$baking->name ='Baking';
  	$baking->save();

  	$sweeteners = new Category;
	$sweeteners->name ='Sweeteners';
	$sweeteners->save();

  	$drinks = new Category;
  	$drinks->name ='Drinks';
  	$drinks->save();

  	$riceAndGrains = new Category;
  	$riceAndGrains->name ='Rice and Grains';
  	$riceAndGrains->save();

  	$snacksandCereals = new Category;
  	$snacksandCereals->name ='Snacks and Cereals';
  	$snacksandCereals->save();

  	$cannedGoods = new Category;
  	$cannedGoods->name ='Canned Goods';
  	$cannedGoods->save();

  	$spicesAndHerbs = new Category;
  	$spicesAndHerbs->name ='Spices and Herbs';
  	$spicesAndHerbs->save();

  	$dairyAndEgg = new Category;
  	$dairyAndEgg->name ='Dairy and Egg';
  	$dairyAndEgg->save();

  	$freshProduce = new Category;
  	$freshProduce->name ='Fresh Produce';
  	$freshProduce->save();

  	$condiments = new Category;
  	$condiments->name='Condiments';
  	$condiments->save();

  	$freezer = new Category;
  	$freezer->name='Freezer';
  	$freezer->save();



  	#Items Table
    $keys = array(
     	'Kosher salt'=> $basics,
    	'Fine salt' => $basics,
    	'Black peppercorns' => $basics,
    	'Extra virgin olive oil' => $basics,
    	'Vegetable oil' => $basics,
     	'Apple cider vinegar'=> $basics,
    	'Red wine vinegar'=> $basics,
     	'Balsamic'=> $basics,
     	'Rice vinegar'=> $basics,
		'Flour: all purpose, whole wheat or pastry' => $baking,
		'Baking soda' => $baking,
		'Baking powder' => $baking,
		'Cream of tartar' => $baking,
		'Cocoa powder (unsweetened)' => $baking,
		'Chocolate: chips or bar' => $baking,
		'Evaporated milk' => $baking,
		'Pure vanilla extract' => $baking,
		'Granulated sugar' => $sweeteners,
		'Confectioners sugar' => $sweeteners,
		'Brown sugar' => $sweeteners,
		'Maple syrup' => $sweeteners,
		'Honey' => $sweeteners,
		'Agave syrup' => $sweeteners,
		'Coffee' => $drinks,
		'Tea' => $drinks,
		'Long-grain white rice' => $riceAndGrains,
		'Brown rice' => $riceAndGrains,
		'Grains: bulgur, quinoa, couscous or farro' => $riceAndGrains,
		'Pasta: standard, whole grain, rice noodles or egg noodles' => $riceAndGrains,
		'Polenta' => $riceAndGrains,
		'Breadcrumbs: plain or panko' => $riceAndGrains,
		'Crackers' => $snacksandCereals,
		'Tortillas' => $snacksandCereals,
		'Cookies or biscuits' => $snacksandCereals,
		'Pretzels' => $snacksandCereals,
		'Marshmallows' => $snacksandCereals,
		'Popcorn kernels' => $snacksandCereals,
		'Dried fruit: raisins, apricots or cherries' => $snacksandCereals,
		'Seeds: sunflower, flax, chia or hemp' => $snacksandCereals,
		'Peanut butter or almond butter' => $snacksandCereals,
		'Applesauce' => $snacksandCereals,
		'Breakfast cereal' => $snacksandCereals,
		'Old-fashioned rolled oats' => $snacksandCereals,
		'Chicken broth' => $cannedGoods,
		'Beans: cannellini, navy, chickpeas or black' => $cannedGoods,
		'Vegetables: hominy, corn or green beans' => $cannedGoods,
		'Olives or capers' => $cannedGoods,
		'Chiles: chipotles in adobo or pickled jalapenos' => $cannedGoods,
		'Salsa' => $cannedGoods,
		'Tomatoes' => $cannedGoods,
		'Tomato paste' => $cannedGoods,
		'Roasted red peppers' => $cannedGoods,
		'Tuna' => $cannedGoods,
		'Anchovy fillets or paste' => $cannedGoods,
		'Bay leaves' => $spicesAndHerbs,
		'Cajun seasoning' => $spicesAndHerbs,
		'Cayenne pepper' => $spicesAndHerbs,
		'Chili powder' => $spicesAndHerbs,
		'Crushed red pepper' => $spicesAndHerbs,
		'Curry powder' => $spicesAndHerbs,
		'Fennel or dill seed' => $spicesAndHerbs,
		'Granulated garlic' => $spicesAndHerbs,
		'Ground cinnamon' => $spicesAndHerbs,
		'Ground cloves' => $spicesAndHerbs,
		'Ground cumin' => $spicesAndHerbs,
		'Ground ginger' => $spicesAndHerbs,
		'Oregano' => $spicesAndHerbs,
		'Paprika: sweet and smoked' => $spicesAndHerbs,
		'Rosemary' => $spicesAndHerbs,
		'Sesame seeds' => $spicesAndHerbs,
		'Thyme (Dried)' => $spicesAndHerbs,
		'Whole nutmeg' => $spicesAndHerbs,
		'Milk' => $dairyAndEgg,
		'Plain yogurt: regular or Greek' => $dairyAndEgg,
		'Unsalted butter' => $dairyAndEgg,
		'Cheddar or mozzarella' => $dairyAndEgg,
		'Goat cheese' => $dairyAndEgg,
		'Parmesan (wedge)' => $dairyAndEgg,
		'Eggs' => $dairyAndEgg,
		'Avocados' => $freshProduce,
		'Carrots' => $freshProduce,
		'Celery' => $freshProduce,
		'Tomatoes: grape, cherry or seasonal beefsteak' => $freshProduce,
		'Broccoli or cauliflower' => $freshProduce,
		'Bell peppers' => $freshProduce,
		'Leafy greens: spinach, kale or chard' => $freshProduce,
		'Lettuce: romaine, Boston or mixed greens' => $freshProduce,
		'Flat-leaf parsley or cilantro' => $freshProduce,
		'Thyme (Fresh)' => $freshProduce,
		'Scallions' => $freshProduce,
		'Gingerroot' => $freshProduce,
		'Potatoes: sweet, white or new' => $freshProduce,
		'Onions' => $freshProduce,
		'Garlic' => $freshProduce,
		'Lemons' => $freshProduce,
		'Limes' => $freshProduce,
		'Apples' => $freshProduce,
		'Bananas' => $freshProduce,
		'Jelly, jam or preserves' => $condiments,
		'Ketchup' => $condiments,
		'Mayonnaise' => $condiments,
		'Mustard: Dijon or whole grain' => $condiments,
		'Pickles' => $condiments,
		'Hot sauce: Tabasco, Sriracha or sambal' => $condiments,
		'Worcestershire sauce' => $condiments,
		'Soy sauce or tamari' => $condiments,
		'Asian fish sauce' => $condiments,
		'Toasted sesame oil' => $condiments,
		'Ground beef, ground turkey or Italian sausage' => $freezer,
		'Boneless, skinless chicken breasts' => $freezer,
		'Bacon' => $freezer,
		'Bread: baguette or sandwich bread' => $freezer,
		'Vegetables: peas, chopped spinach or corn' => $freezer,
		'Fruit: berries, peaches or mangos' => $freezer,
		'Nuts: almonds, walnuts or pecans' => $freezer,
		'Dough: pizza, pie or puff pastry' => $freezer,
		'Ice Cream' => $freezer
	
    );

    foreach ($keys as $key=>$category){
      $item = new Item;
      $item->name= $key;
      $item->category()->associate($category);
      $item->save();

	}

  }
}
