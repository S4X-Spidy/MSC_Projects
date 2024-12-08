// Define the static array of words
const wordsArray = ["apple", "banana", "orange", "grape", "melon"];
const index = 0;
const score = 0;

// Function to speak each word in the array every 40 seconds
function speakWord() {
    if (index < wordsArray.length) {
        // Create a new SpeechSynthesisUtterance object
        const word = new SpeechSynthesisUtterance(wordsArray[index]);

        // Speak the word
        window.speechSynthesis.speak(word);

        // Move to the next word in the array
        index++;
    }
}

// Function to compare input word with the word from the array
function checkWord() {
    // Get the input word
    const inputWord = document.getElementById("wordInput").value.toLowerCase().trim();

    // Check if input word matches the word from the array at the current index
    if (inputWord === wordsArray[index - 1]) {
        // Increment score if the word is correct
        score++;
        // Speak the next word from the array
        speakWord();
    } else {
        // Print result if the word is incorrect
        document.getElementById("result").innerHTML = "Incorrect word. Please try again.";
    }
}

// Function to start speaking words when the Start button is clicked
function startSpeaking() {
    // Speak the first word immediately
    speakWord();

    // Speak subsequent words every 40 seconds
    setInterval(speakWord, 40000);
}

// Function to handle submission when the Submit button is clicked
function handleSubmit() {
    // Stop speaking words
    window.speechSynthesis.cancel();

    // Check the input word and update score
    checkWord();

    // Display the current score
    document.getElementById("score").innerHTML = "Score: " + score;
}

// Event listener for the Start button
document.getElementById("startButton").addEventListener("click", startSpeaking);

// Event listener for the Submit button
document.getElementById("submitButton").addEventListener("click", handleSubmit);