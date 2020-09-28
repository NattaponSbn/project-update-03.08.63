
from flask import Flask, render_template, json, request
from flask import Flask, request, abort, jsonify
import pymysql
from pythainlp import word_tokenize
import sys
import json
import requests
import http.server




def autokeyword():
    
    #database connection
    connection = pymysql.connect(host="localhost", user="root", passwd="", database="projectdb")
    cursor = connection.cursor()

    # queries for keyword all rows
    keyword = "Select * from keyword_p ;"

    #executing the quires
    cursor.execute(keyword)
    rows = cursor.fetchall()
    # print(rows)
    
    text = data.text
    print(data.text)
    # data = requests.get('http://localhost:8000/api/getdes_p')print(text)
    # x=text.encode("utf-8")
    # y = x.decode('utf-8')
    # x=text.decode('utf-8')
    # print(x)
    array = []
    proc = word_tokenize(text, engine='newmm')
    for procs in proc:
        for row in rows:
            # print(procs)
            if procs == row[2]:
                mycursor = connection.cursor()
                # return {procs}
                add_key = "INSERT INTO temp_keyword (name_key) VALUES (%s)"
                val = (row[2])
                mycursor.execute(add_key, val)
                print(row[2])
                # load = row[2]
                # loads = json.dumps(load)
                # array.append(load)
    
    #database connection
    connection.commit()
    connection.close()
    # print(array)

    #send keyword to json
    return array
            


if __name__ == '__main__':
     
    # while True:    
    data = requests.get('http://localhost:8000/api/getdes_p')
    # print(data.text)
    autokeyword()
        
                

    


    
















