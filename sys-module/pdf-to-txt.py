import PyPDF2


pdf_file = open('Application-Register-1.pdf', 'rb')
pdf_reader = PyPDF2.PdfFileReader(pdf_file)

print(pdf_reader.numPages)

page = pdf_reader.getPage(0)
print(page.extractText())

pdf_file.close()
# Output:

