# Simple-Todo-List---PHP

This project is a simple CRUD (Create, Read, Update, Delete) todo list application developed in PHP. It allows users to manage their tasks by adding, viewing, updating, and deleting todo items.

## Features

- **Create**: Add new todo items with a title and description.
- **Read**: View all existing todo items in a list format.
- **Update**: Edit the title or description of existing todo items.
- **Delete**: Remove todo items from the list.

## Installation

To run this project locally on your machine using XAMPP, follow these steps:

1. **Clone the repository:**

   ```bash
   git clone <repository_url>
   ```

2. **Navigate to the project directory:**

   ```bash
   cd <project_directory>
   ```

3. **Install XAMPP:**

   If you haven't already installed XAMPP, download and install it from the official website: [XAMPP](https://www.apachefriends.org/index.html).

4. **Start Apache and MySQL services:**

   Open XAMPP Control Panel and start both Apache and MySQL services.

5. **Database setup:**

   - Open your web browser and navigate to `http://localhost/phpmyadmin`.
   - Create a new database named `todolist`.
   - Import the SQL file `todolist.sql` located in the project directory into the `todo_list` database. This file contains the necessary table structure for the todo list.

6. **Configure database connection:**

   Open the `config.php` file located in the project directory and update the database connection settings according to your XAMPP configuration.

7. **Start the server:**

   Place the project files in the XAMPP `htdocs` directory (usually located at `C:\xampp\htdocs\` on Windows or `/Applications/XAMPP/htdocs/` on macOS), and then start the Apache server from the XAMPP Control Panel.

8. **Access the application:**

   Open your web browser and navigate to `http://localhost/<project_directory>` to access the todo list application.

## Usage

1. **Create todo items:**

   Click on the "Add Todo" button and fill in the title and description fields, then click "Submit" to add a new todo item.

2. **View todo items:**

   All existing todo items are displayed on the homepage in a list format.

3. **Update todo items:**

   Click on the "Edit" button next to a todo item to update its title or description.

4. **Delete todo items:**

   Click on the "Delete" button next to a todo item to remove it from the list.

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature-name`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature/your-feature-name`).
5. Create a new Pull Request.

## License

This project is licensed under the [MIT License](LICENSE).

## Support

For any questions or issues, please open an issue here on GitHub or contact [Ola Philips](mailto:philipsola64@gmail.com).
```

Feel free to adjust the instructions and details according to your project's specific setup and requirements!
