def formatIntersect(feature):
    'a function to generate an intersect string'
    formateString = ' '
    for count, feature in enumerate(feature):
        formateString += feature + ' #;'
    else:
        formateString += feature + ' #'
    return formateString
shpNames = ['example.shp', 'example2.shp', 'example3.shp']
iString = formatIntersect(shpNames)
print(iString)    
