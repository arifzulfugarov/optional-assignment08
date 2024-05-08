# End-of-term test - 2024.01.10.

## Important information

- You have **210 minutes** to complete the exam. Filling in the included `README.eng.md` template, reading the tasks, downloading the materials, compressing and uploading your solution is **included** in the time limit.
- Solutions must be uploaded to ELTE Canvas. **The system closes at 20:00 (Hungarian time) and there will be no opportunity to submit your solution after the aforementioned time**.
- You can use your pre-uploaded materials in the Exam System to solve the problems, and the [JavaScript](https://developer.mozilla.org/en-US/) and [PHP documentation](https://www.php.net/) enabled in test mode. **Human assistance** (synchronous, asynchronous, chat, forum, etc.) **and artificial intelligence** (ChatGPT, Bing AI, GitHub Copilot, etc.) **are not allowed during the duration of the exam!** You agree to accept them in the `README.eng.md` file in the starter pack, in which you also acknowledge the possible consequences.
- The tasks are independent and can be solved **in any order**.
- To begin your work you should first [download the starting package we have prepared](???). Each task is stored in a separate library. In each directory we have prepared the HTML, CSS, JavaScript, PHP files. Work in those directories! In the client-side tasks, you usually only need to edit the `.js` file, but you can modify the HTML if you need to, and you can even split your solution into several `.js` files, but this is not expected at all.
- The starting package contains a template called `README.eng.md` where you should fill in your name and Neptun code (the <> characters must be removed). **Submissions without a properly filled `README.eng.md` file will not be graded!**
- Each directory contains a file named `TASKS.md`. Replace the space in `[ ]` with an `x` where you have (even partially) succeeded to complete the task. This will make us easier to find your solution when we grade your exam.
- To install PHP, download the `PhpComposerInstaller.exe` file from Canvas and execute it!


## Task 1: Ticket-to-ride (js-1-ticket, 12 pts)

"Ticket-to-ride" (also known as "Zug um Zum") is a board game about building train lines between big cities. The `ticket-to-ride-data.js` file contains the most important data about the cities (in the array of the same name) and their connections (in the array of the same name) that are in the game. Look into the file and understand the data structures, then answer the following questions **programmatically** based on the provided data. _(Hint: you can see the correct answers on the image below.)_

Your solution goes to `index.js` where you can simply refer to the data structures defined in the other file (see the included `console.log()` calls) since they are both imported in the HTML file in the correct order.

- a. (3 points) Write the current name and country of the city formerly known as Constantinople into the element with ID `task1`.
- b. (3 points) List all the cities inside the rectangle bounded by points (x: 30, y: 40) and (x: 60, y: 60) into the element with ID `task2`.
- c. (3 points) Write whether there is (true or false) a connection that leads to Budapest into the element with ID `task3`.
- d. (3 points) Write the average number of elements in green connections into the element with ID `task4`.


## Task 2: Postcard (js-2-postcard, 12 points)

Create a postcard generator application! You fill in the fields and their values will immediately appear in the corresponding places on the postcard template.

- a. (2 points) If you type in any field, write the content of the element `background-color` to the console. *(Hint: to do this, you should watch the `input` event at the form level.)*
- b. (2 points) When typing, always set the `background-color` style property of the element identified by `postcard` to the contents of the `background-color` field if it is not empty! If it is empty, then set it to yellow.
- c. (2 points) When typing, always write the content of the element identified by `addressee` in the header element inside the `postcard` element.
- d. (2 points) When typing, always write the content of the element `sender` in the `footer` element inside the `postcard` element.
- e. (2 points) When typing, always write the content of the first textarea in the paragraph inside the `postcard` element.
- f. (2 points) When typing, always set the style class of the paragraph inside the `postcard` element to `left`, `center` or `right` according to the value of the radio buttons next to the first textarea. *(Technical help: how to use radio buttons see 5th lecture!)*


## Task 3: Bar chart (js-3-barchart, 12 points)

In this task, you need to create a bar chart/graph drawing application using a Canvas that can graphically display the values of three inputs (sliders).

- a. (2 points) When moving the three sliders on the page, the values displayed next to them should be updated continuously (without releasing the mouse button). *(Hint: use an `input` event)*
- b. (3 points) On the Canvas, display the three values by drawing three filled rectangles next to each other, each 100 pixels wide, located at the bottom edge of the drawing area, with the same height as the slider value and with the corresponding fill colors: red, green and blue, respectively.
- c. (3 points) At the height of the highest column, draw a black line 4 pixels thick across the entire width of the canvas.
- d. (2 points) When the "Animate" checkbox is checked, change the value of each slider at short intervals by a random value between -2 and +2 and update the chart.
- e. (2 points) The animation should be stopped by unchecking the checkbox.

## PHP tasks
### 4. Store (php-4-store, 10 points)
The platform has decided to replace the outdated React + Node.js online store with something much better: PHP. Help them to display the games on the new homepage!

- **a)**  1 point: Set the `src` attribute of the `img` element in the `header` to the `store_logo` variable in the `data.php` file! Do not copy the value, but generate it dynamically with PHP!
- **b)** 1 point: List a `div` with the `game` class for each element of the `games_*` array in the `data.php` file within the `#content` element! (You can use either the `games_associative` or the `games_object` variable - whichever you prefer.)
- **c)** 2 points: Place an image in each `div.game` element, the source of which can be generated from the `image` attribute of the given game. The path for each image is the `img/` folder, and the extension is `jpg`.
- **d)** 1 point: Set the `title` attribute of each image to the game's `name` attribute! (So if you hover the cursor over the image, the name of the game will appear.)
- Place an `info` element in each `div.game` element, the content of which is:
    - **e)** 1 point: *Regular game without discount:* If the game's `price` attribute is a positive number and the `sale` is zero, write the game's price into a simple `span` element in the `div.info` element, with a `€` at the end. (For example: `59.99€`)
    - **f)** 2 points: *Regular game with discount:* If the game's `price` attribute is a positive number and the `sale` is not zero, three `span` elements are placed in the `div.info` element. Display every price with two decimal places! The discount should remain a simple integer without decimals! (For example: 60.00€, -60%) Help: use the `number_format` function.
        - `span.sale`: the discount in negative percentage (e.g. -60%)
        - `span.original`: the price of the game without discount, with a `€` at the end (e.g. 59.99€)
        - `span.final`: the discounted price of the game, with a `€` at the end (e.g. 23.99€)
    - **g)** 1 point: *Free game:* If the game's `price` attribute is zero, write `Free to Play` into a `span` element in the `div.info` element.
    - **h)** 1 point: *Unreleased game:* If the game's `price` attribute is a negative number, write `Add to your wishlist` into a `span` element in the `div.info` element.

![php-4-store](src/php-4-store.png)

### 5. Rating (php-5-rating, 12 points)

- **The test links only work with GET requests. You cannot start and test POST requests via the links!**
- **Two versions of the test links are given. Use the first one if you do the validation in the `index.php` file, and the other one if you do it in a file called `validate.php` (you have to create this file)!**
- **Full points are only given for a task if the given error is displayed in the `errors` element, otherwise only half of the points are available!**

If we played a game, we would often like to rate it. Validate the following form!
- **a)** 2 points: The username, e-mail, played hours, opinion and rating fields are required.
- **b)** 1 points: The length of the username is between 8 and 20 characters.
- **c)** 1 point: The format of the e-mail is correct.
- **d)** 1 point: The played hours can only be an integer.
- **e)** 1 point: The played hours are between 0 and 999.
- **f)** 2 points: The rating can only take the value in the list (`5-excellent`, `4-good`, `3-average`, `2-bad`, `1-terrible`).
- **g)** 3 points: The `bug` word is mandatory in the `opinion` field for a `bad` rating, and the `crash` word for a `terrible` rating. Do not differentiate between lowercase and uppercase letters in the `bug` and `crash` words. (`str_contains`, `strtolower`)
- **h)** 1 point: In case of successful validation, display the `success` element, and hide the `errors` element.

Error messages:
- `The username is required!`
- `The length of the username must be between 8 and 20 characters!`
- `The e-mail address is required!`
- `The format of the e-mail address is incorrect!`
- `The "played hours" is required!`
- `The "played hours" can only be a number!`
- `The "played hours" can only be between 0 and 999!`
- `The "played hours" can only be an integer!`
- `The rating is required!`
- `The rating can only take the value in the list!`
- `The opinion is required!`
- `The "bug" word is mandatory in the opinion for a "bad" rating!`
- `The "crash" word is mandatory in the opinion for a "terrible" rating!`

![php-5-rating](src/php-5-rating.gif)

### 6. Achievements (php-6-achievements, 12 points)
Games are often complemented by different achievements/milestones. The platform would like to be able to display the achievements associated with the games on the game pages. **You don't have to validate the form!** You have to store the data in JSON, and you have to be able to read it from there.

- **a)** 1 point: Generate the games from the `data.json` file into the `select#game` field of the form. Each game should have an `option` element with a `value` attribute of the game's `id` and a content of the game's `name`.
- **b)** 3 points: You should be able to add a new achievement with the form.
- **c)** 3 points: If the name of the achievement entered in the form already exists for the given game, update the description of the achievement to the new value.
- **d)** 2 points: The names and descriptions of the existing achievements should be listed below the form.
- **e)** 2 points: If we click on an achievement, we should go to the page of the game to which it belongs, where the name of the game appears as a heading, and below it is the list of achievements associated with the game.
- **f)** 3 points: In the list of achievements (on the game's page), there should be a button (link) on each row that can be used to delete the given achievement.

![php-6-achievements](src/php-6-achievements.gif)
