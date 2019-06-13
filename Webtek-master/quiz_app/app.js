function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};


function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};

function showScores() {
    var gameOverHTML = "<h1>Result</h1>";
    gameOverHTML += "<h2 id='score'> Your scores: " + quiz.score + "</h2>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};

// create questions
var questions = [
    new Question("Provide a component-based, platform-independent method building web-based applications, without the performance limitations of CGI programs.", ["Java Server Pages", "Servlet","Servlet Processing", "Servlet Request Processing"], "Servlet"),
    new Question("Client sends a request to a web server URL that is mapped to a servlet?", ["Servlet Response Processing", "Servlet Processing", "Servlet Request Processing", "Java Server Pages"], "Servlet Processing"),
    new Question("Invoked once on the servlet by the servlet container when the servlet is instantiated;can be used by the servlet for one-time startup initialization?", ["init(config)", "service (request, response) ","Destroy()", "config()"], "init(config)"),
    new Question("Invoked on the servlet by the servlet container when the servlet is to be unloaded?", ["service (request, response)", "config()", "init(config)", "Destroy()"], "Destroy()"),
    new Question("Invoked each time the servlet is called upon to process a request (typically on a separate thread for each call).", ["Destroy()", "service (request, response)", "config()", "init(config)"], "service (request, response)"),
    new Question("Simply an HTML web page that contains additional bits of code that execute application logic to generate dynamic content", ["Servlet Processing", "Java Server Pages", "Directives", ". Java Server Pages Actions"], "Java Server Pages") ,  
    new Question("Are instructions that are processed by the JSP engine when the page is compiled to a servlet.", ["Directives", "Libraries", "Instructions ", "Functions"], "Directives") ,  
    new Question("General purpose scripting language mainly for web development.", ["Node", "PHP", "Java", "Servlet"], "PHP"),  
    new Question("One line PHP comment", ["/*  */", "//", "#", "/**  **/"], "//") ,  
    new Question("Multi line PHP comment", ["//", "/**  **/", "/*  */", "#"], "/*   */") ,  
    new Question("One line shell style comment", ["//", "/**  **/", "/*  */", "#"], "#") ,  
    new Question("This are variables that are global - accessible throughout a PHP script.", ["$GLOBALS", "$_SERVER", "$_GLOBALS", "$SERVER"], "$GLOBALS") ,  
    new Question("An array containing information about the server.", ["$SERVER", "$_SERVER", "$_GET", "$GET"], "$_REQUEST") ,  
    new Question("An associative array that contains items that are uploaded via HTTP POST method.", ["$_POST", "$FILES", "$_FILES", "$POST"], "$_FILES") ,  
    new Question("Used to retrieve requests that are sent via POST method.", ["$_FILES", "$FILES", "$_POST", "$POST"], "$_POST") ,  
    new Question("Used to retrieve requests that are sent via environment method.", ["$_ENV ", "$_GET", "$ENV", "$GET"], "$_ENV") ,  
    new Question("Contains an associative array containing requests that are sent via HTTP cookies.", ["$COOKIE", "$_SESSION", "$SESSION", "$_COOKIE"], "") ,  
    new Question("Associative array of variables that are accessible in between PHP scripts.", ["$_SESSION", "$_COOKIE", "$SESSION", "$COOKIE"], "$_SESSION") ,  
    new Question("Script continues after producing a warning (E_WARNING)", ["Include", "Exclude", "Require", "Warning"], "Include") , 
    new Question("Stops the script after producing a fatal error (E_COMPILE_ERROR)", ["Error", "Include", "Exclude", "Require"], "Require") ,  
    new Question("Allows programs (i.e. scripts) to be downloaded from a web server and executed in the client environment (e.g. browser).", ["Server-side web scripting", "Client-side web scripting", "Web Scripting", "Server Scripting"], "Client-side web scripting") ,  
    new Question("Java Server Pages (JSP) comment", ["<--    -->", "<%--  --%>", "<$--  --$>", "<*--  --*>"], "<%--  --%>") ,  
    new Question("Browser implementation defects (e.g. buffer overflows)", ["Risks", "Security Risks", "Security defects", "Defects"], "Security Risks") , 
    new Question("This are used to collect data from an HTML form.", ["$GET", "$REQUEST", "$_REQUEST", "$_GET"], "$_REQUEST")
    
];


// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();





