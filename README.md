# Audio to Text Conversion

This is a simple web application that allows you to convert spoken audio into text using the browser's speech recognition functionality.

## Usage

1. Clone the repository or download the code files.

2. Open the `index.html` file in a web browser.

3. Click the "Record" button to start recording your audio.

4. Speak into your device's microphone to provide the input.

5. Click the "Stop" button to stop the recording.

6. The transcript of the recorded audio will be displayed in the text area below.

7. You can submit the form to process the transcript or send it to the server for further processing.

## Language Support

The application is designed to recognize the English language. The speech recognition engine is set to English by default.

## Compatibility

The application uses the `webkitSpeechRecognition` object, which is specific to WebKit-based browsers such as Chrome and Safari. For compatibility with other browsers, you may need to use a different speech recognition API or a third-party library.

## Dependencies

The application depends on the following external JavaScript library:

- jQuery 3.6.0: Included via a CDN link in the HTML file.

## License

This project is licensed under the [MIT License](LICENSE).