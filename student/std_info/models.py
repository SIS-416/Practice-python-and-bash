from django.db import models

# Create your models here.
class StdInfo(models.Model):
    std_name = models.CharField(max_length=100)
    std_age = models.IntegerField()
    std_city = models.CharField(max_length=100)
    std_contact = models.IntegerField()
    