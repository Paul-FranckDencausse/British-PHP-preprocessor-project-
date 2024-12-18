

# **£-PHP Preprocessor**  
*Because $ is just too pedestrian, don’t you think?*

---

## **Introduction**  
Well, hello there, old sport! Welcome to the **£-PHP Preprocessor**, a jolly good tool designed to bring a touch of British sophistication to your mundane PHP development. Why settle for `$` when you can bask in the elegance of `£`?  

This preprocessor translates your bespoke `£` variables into the common PHP `$` syntax, allowing you to write code with an air of class before running it like the *commoners*.  

Tally-ho, and off we go!

---

## **Features**  
- **Proper British Variables**: Write `£favourite_tea` instead of `$favourite_tea`. Isn’t that smashing?  
- **Simple as a cuppa**: Just write, preprocess, and voilà—your PHP code is ready for the Queen (or at least your server).  
- **No-nonsense Design**: Like a good Sunday roast, it’s straightforward and gets the job done.  

---

## **Installation**  
Righto, let’s get you sorted. It’s as simple as popping the kettle on:  

1. Clone the repository:  
   ```bash
   git clone 
   cd lovely-php-preprocessor
   ```

2. Ensure you have PHP installed. (It’s terribly uncivilized not to.)  

3. And there you have it, ready to rock and roll! (Or sip and code, more like.)  

---

## **Usage**  
### Writing Your Code  
Use `£` for your variables in your `.phps` files. For example:  

```phps
£tea = "Earl Grey, hot";
echo £tea;
```
![image](https://github.com/user-attachments/assets/8e72f332-a70a-4407-a109-fa289e4ec349)


Doesn’t that look splendid?  

### Preprocessing Your Code  
Run the preprocessor with the following command:  

```bash
php preprocessor.php
```

This will translate your `.phps` files into PHP-ready `.php` files, converting all `£` to `$`. Your tea-laden dreams become reality!  

---

## **Example Workflow**  
1. Write a smashing file called `my_code.phps`:
    ```phps
    £biscuit = "Digestive";
    echo "My favourite biscuit is £biscuit.";
    ```

2. Preprocess it:  
    ```bash
    php preprocessor.php
    ```

3. The output will be in `my_code_translated.php`:
    ```php
    $biscuit = "Digestive";
    echo "My favourite biscuit is $biscuit.";
    ```

4. Run the file as usual:  
    ```bash
    php my_code_translated.php
    ```

Tea-tastic! 🎉

---

## **Contributing**  
Fancy joining the cause? We welcome all contributions from fine ladies and gentlemen like yourself. Please:  
1. Fork the repository.  
2. Create a new branch with a jolly good name.  
3. Make your changes whilst humming *God Save the King*.  
4. Submit a pull request for a proper chinwag.  

---

## **Acknowledgements**  
A hearty "cheers" to:  
- Tea, for fuelling late-night coding sessions.  
- The pound sterling, for inspiring us to think poshly.  
- You, dear user, for keeping PHP classy.  

---

## **License**  
This project is licensed under the **Tea & Crumpets License**. By using it, you agree to:  
1. Drink at least one cup of tea during development.  
2. Say “cheers” whenever you push to production.  

God save the variables! 💂‍♀️

