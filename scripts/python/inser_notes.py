import mysql.connector

# Database configuration
db_host = 'database'
db_user = 'root'
db_password = 'xens'
db_db = 'schedule'

try:
    # Connect to the database
    connection = mysql.connector.connect(
        host=db_host,
        user=db_user,
        password=db_password,
        database=db_db
    )

    if connection.is_connected():
        print("Connected to the database.")

        # Create a cursor to interact with the database
        cursor = connection.cursor()

        for x in range(0,700):
            # SQL query for insertion
            insert_query = f"INSERT INTO note (id, note) VALUES (NULL, '{x}`s notes')"

            # Execute the insertion query
            cursor.execute(insert_query)

        # Commit the changes to the database
        connection.commit()

        print("Data inserted successfully.")

except mysql.connector.Error as err:
    print("Error:", err)

finally:
    # Close the cursor and the connection
    if 'cursor' in locals():
        cursor.close()
    if 'connection' in locals() and connection.is_connected():
        connection.close()
        print("Connection closed.")
