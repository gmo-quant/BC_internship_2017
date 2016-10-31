#py
#http://www.broward.edu/zext/ext/Coursedetail.jsp?ccn=ENC1101&Name=COP
# change the ccn=xxxx
import urllib.request;

link = "http://www.broward.edu/zext/ext/Coursedetail.jsp?ccn=CIS2949&Name=COP";

file = open("F:\\BC_course\\CIS2949\\webpage\\courseDescription\\file.html");
from html.parser import HTMLParser
from html.entities import name2codepoint

class MyHTMLParser(HTMLParser):
    def handle_starttag(self, tag, attrs):
        if tag == "table":
            print(" start tag ", tag);
    def handle_endtag(self, tag):
        if tag == "table":
            print("End tag  :", tag)
    def handle_data(self, data):
        print("Data     :", data)
    
parser = MyHTMLParser();
parser.feed(file.read());
file.close();
