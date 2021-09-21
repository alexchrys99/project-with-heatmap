# project-with-heatmap
to run the project i used wamp 3.1.9(with php : 7.2.18, Apache: 2.4.39, MySql: 5.7.26)
to run properly the upload we need to set in php.ini file the following requirements
max_execution_time = 15000
max_input_type = 9000
max_input_vars = 2500
memory_limit = 900M
post_max_size = 2048M
upload_max_filesize = 2048M
