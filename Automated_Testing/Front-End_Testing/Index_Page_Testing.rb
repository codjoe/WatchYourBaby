# First page testing all clickable buttons
require 'selenium-webdriver'

driver = Selenium::WebDriver.for :chrome

begin
#First methode to click on the homeButton
@test
  def homeButton
    driver.get 'http://127.0.0.1:3000/www/#/screens/f59703af-d6c7-442e-bf74-ed2f73529667'
    driver.find_element(:xpath,'//*[@id="s-Rectangle_5"]/div[2]/div/div/div').Click
  end
#Second methode to click on About US
@test
  def AboutUs
    driver.get 'http://127.0.0.1:3000/www/#/screens/f59703af-d6c7-442e-bf74-ed2f73529667'
    driver.find_element(:xpath,'//*[@id="rtr-s-Rectangle_9_0"]').Click
  end
#Third methode to click on the Resourse
@test
def Resourses
  driver.get 'http://127.0.0.1:3000/www/#/screens/f59703af-d6c7-442e-bf74-ed2f73529667'
  driver.find_element(:xpath,'//*[@id="rtr-s-Rectangle_6_0"]').Click
end
#Fourth button to click on FAQ
@test
def FAQ
  driver.get 'http://127.0.0.1:3000/www/#/screens/f59703af-d6c7-442e-bf74-ed2f73529667'
  driver.find_element(:xpath,'//*[@id="rtr-s-Rectangle_7_0"]').Click
end

ensure
driver.quit
end
