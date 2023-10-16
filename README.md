# Workpal Interview Test

This is the Workpal interview test project. To run the code, you need to have PHP installed on your host.

## Running the Application

To execute the application, follow these steps:

1. Open your terminal or command prompt.
2. Navigate to the project directory.

3. Start the PHP development server by running the following command:

   ```bash
   php -S localhost:8080
   ```

4. Open your web browser and visit `http://localhost:8080` to access the application.

## Testing Validation

To test the input validation, follow these steps:

1. Submit the form without entering any values. The application should display an error message.
2. Submit the form with only a title. The application should accept this input.
3. Submit the form with a schedule start date greater than the schedule end date. The application should display an error message.

## Testing Server Validation

To test server validation, you can disable JavaScript in your browser:

1. Open your web browser.
2. Disable JavaScript (the method to do this varies depending on the browser).
3. Submit the form with various inputs. The application should still provide validation and error messages on the server.

By following these steps, you can review and test the Workpal interview test project, ensuring that it works as expected and that the input validation and server-side processing are functioning correctly.

Remember to keep your README updated as your project evolves, and consider adding sections for dependencies, installation instructions, and any other relevant information that might be helpful for users or contributors.
