package Connection;

import java.sql.*;

public class teste {
	public static void main(String[] args) {

		String url = "jdbc:mysql://localhost:3306/teste";
		String username = "root";
		String password = "";

		try {
			Class.forName("com.mysql.cj.jdbc.Driver");

			Connection connection = DriverManager.getConnection(url, username, password);

			Statement statement = connection.createStatement();

			ResultSet resultSet = statement.executeQuery("select * from teste1");

			while (resultSet.next()) {
				System.out.println(resultSet.getInt(1));
			}

			connection.close();

		} catch (Exception e) {
			System.out.println(e);
		}
	}
}
