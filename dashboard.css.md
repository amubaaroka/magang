/* public/css/dashboard.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
}

.sidebar {
    background-color: #2c3e50;
    color: #ecf0f1;
    width: 250px;
    min-height: 100vh;
    padding: 20px;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 15px;
}

.sidebar ul li a {
    color: #ecf0f1;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 4px;
}

.sidebar ul li a:hover {
    background-color: #34495e;
}

.logout-btn {
    background-color: #e74c3c;
    border: none;
    color: #ecf0f1;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    margin-top: 20px;
}

.logout-btn:hover {
    background-color: #c0392b;
}

.main-content {
    flex: 1;
    padding: 20px;
}

header {
    background-color: #3498db;
    color: #fff;
    padding: 10px;
    border-radius: 4px;
}

header h1 {
    margin: 0;
}

.content {
    margin-top: 20px;
}
