from django.db import models

# Create your models here.

class Printer(models.Model):
    prn_status = models.CharField(max_length=3)
    prn_model = models.CharField(max_length=8)
    prn_inventory = models.CharField(primary_key=True, max_length=14)
    prn_cabinet = models.CharField(max_length=5)
    prn_socket = models.CharField(max_length=26)
    prn_ip = models.CharField(max_length=15)
    prn_network_name = models.CharField(max_length=15)
    prn_sn = models.CharField(max_length=20)
    prn_mac = models.CharField(max_length=12)