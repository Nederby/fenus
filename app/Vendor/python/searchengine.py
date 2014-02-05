#! /usr/bin/python

import urllib2
import xml.etree.cElementTree as ET
from bs4 import BeautifulSoup
from urlparse import urljoin

#Create a list of words to ignore
ignorewords=set(['the', 'of', 'to', 'and', 'a', 'in', 'is', 'it']);

class crawler:

    def __init__(self,dbname=""):
        pagesList = ["http://www.trustpilot.dk/review/www.leasy.dk", 
                        "http://www.trustpilot.dk/review/ferratum.dk", 
                        "http://www.trustpilot.dk/review/alfalaan.dk", 
                        "http://www.trustpilot.dk/review/www.extracash.dk", 
                        "http://www.trustpilot.dk/review/www.gemoneybank.dk",
                        "http://www.trustpilot.dk/review/www.der.dk",
                        "http://www.trustpilot.dk/review/www.hotlaan.dk",
                        "http://www.trustpilot.dk/review/www.kvikautomaten.dk",
                        "http://www.trustpilot.dk/review/www.ikano.dk",
                        "http://www.trustpilot.dk/review/www.vivus.dk",
                        "http://www.trustpilot.dk/review/trustbuddy.dk"]
        self.xmlvalues = dict()
        self.crawl(pagesList)
    
    def __del__(self):
        pass
    def dbcommit(self):
        pass
    
    def getentryid(self,table,field,value,createnew=True):
        return None
    
    def addtoindex(self,url,soup):
        print 'Indexing %s' % url
    
    def gettextonly(self,soup):
        return None
    
    def separatewords(self,text):
        return None
    
    def isindexed(self,url):
        return False
    
    def addlinkref(self,urlFrom,urlTo,linkText):
        pass
    
    def crawl(self,pages,taglookfor='span',depth=2):
        for i in range(depth):
            newpages=set()
            for page in pages:
                try:
                    c=urllib2.urlopen(page)
                except:
                    print "Could not open %s" % page
                    continue
                soup=BeautifulSoup(c.read())
                self.addtoindex(page,soup)
                
                if(taglookfor == 'span'):
                    spans=soup(taglookfor);
                    for span in spans:
                        if('class' in dict(span.attrs)):
                            classnames = span['class']
                            for classname in classnames:
                                if(classname == "average"):
                                    self.xmlvalues[page] = span.getText()
            pages=newpages
        self.writexmlfile(self.xmlvalues)
        
    
    def createindextables(self):
        pass
    
    def addvalue(self, name, value):
        pass
    
    def writexmlfile(self, values):
        root = ET.Element("root")
        doc = ET.SubElement(root, "doc")
        for k, v, in values.iteritems():
            field = ET.SubElement(doc, "field")
            field.set("name", k)
            field.text = v
        tree = ET.ElementTree(root)
        tree.write("D:\\Sites\\fenus.dk\\app\\tmp\\xml\\trustpilot.xml")
    
if(__name__ == '__main__'):
    crawler = crawler()
