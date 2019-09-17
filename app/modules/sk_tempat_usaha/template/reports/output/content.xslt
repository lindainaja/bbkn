<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:template match="/">
  <w:document xmlns:ve="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" xmlns:w10="urn:schemas-microsoft-com:office:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml">
   <w:body>
    	<xsl:for-each select="root/row">
    <w:p w:rsidR="00A155E8" w:rsidRPr="00B5787C" w:rsidRDefault="00A155E8" w:rsidP="00A155E8">
     <w:pPr>
      <w:pStyle w:val="Heading1"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="26"/>
       <w:u w:val="single"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="28"/>
       <w:u w:val="single"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>S</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="28"/>
       <w:u w:val="single"/>
      </w:rPr>
      <w:t xml:space="preserve">URAT </w:t>
     </w:r>
     <w:r w:rsidRPr="007F3D8E">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="28"/>
       <w:u w:val="single"/>
      </w:rPr>
      <w:t>KETERANGAN</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="28"/>
       <w:u w:val="single"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> USAHA</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00A155E8" w:rsidRDefault="00263702" w:rsidP="00A155E8">
     <w:pPr>
      <w:pStyle w:val="Heading2"/>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="0"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="24"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="24"/>
      </w:rPr>
      <w:t xml:space="preserve">Nomor : </w:t>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="24"/>
      </w:rPr>
      <w:t><xsl:value-of select="no"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00A155E8" w:rsidRPr="00CA3CE9" w:rsidRDefault="00A155E8" w:rsidP="00A155E8">
     <w:pPr>
      <w:rPr>
       <w:sz w:val="12"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00A155E8" w:rsidRPr="00BC450D" w:rsidRDefault="00A155E8" w:rsidP="00A155E8">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="id-ID"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00BC450D">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="id-ID"/>
      </w:rPr>
      <w:t>Yang bertanda tangan dibawah ini :</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00A155E8" w:rsidRPr="00C11C90" w:rsidRDefault="00A155E8" w:rsidP="00A155E8">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00BC450D">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="id-ID"/>
      </w:rPr>
      <w:t>N a m</w:t>
     </w:r>
     <w:r w:rsidRPr="00BC450D">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> a</w:t>
     </w:r>
     <w:r w:rsidRPr="00BC450D">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="ttd_nama"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00A155E8" w:rsidRPr="00FC7043" w:rsidRDefault="00A155E8" w:rsidP="00A155E8">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00BC450D">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>N I P</w:t>
     </w:r>
     <w:r w:rsidRPr="00BC450D">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidRPr="00BC450D">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t><xsl:value-of select="ttd_nip"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00A155E8" w:rsidRDefault="00A155E8" w:rsidP="00A155E8">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>Jabatan</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00A155E8" w:rsidRPr="00967DED" w:rsidRDefault="00A155E8" w:rsidP="00A155E8">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="2"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00D33369" w:rsidRPr="000E4C4B" w:rsidRDefault="00D33369" w:rsidP="00D33369">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="000E4C4B">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>Menerangkan dengan sebenarnya bahwa :</w:t>
     </w:r>
     <w:r w:rsidRPr="000E4C4B">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
     </w:r>
    </w:p>
    <w:p w:rsidR="00D33369" w:rsidRPr="00B82440" w:rsidRDefault="00D33369" w:rsidP="00D33369">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="709"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>N a m a</w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="nama"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00D33369" w:rsidRDefault="00D33369" w:rsidP="00594A56">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="709"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>Jenis Kelamin</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
      <w:t xml:space="preserve">: </w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="jenis_kelamin"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00D33369" w:rsidRDefault="00665916" w:rsidP="00594A56">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="709"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>Tempat &amp; Tgl. Lahir</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="ttl"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00D33369" w:rsidRDefault="007C1115" w:rsidP="00D33369">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="709"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>A g a m a</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
      <w:t xml:space="preserve">: </w:t>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="agama"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00176DFC" w:rsidRPr="00B82440" w:rsidRDefault="00996FC1" w:rsidP="00594A56">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="709"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>Status Perkawinan</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
      <w:t xml:space="preserve">: </w:t>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="status_perkawinan"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00D33369" w:rsidRPr="00B82440" w:rsidRDefault="00DE31CC" w:rsidP="00D33369">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
       <w:tab w:val="left" w:pos="7515"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="709"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>P e k e r j a a n</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="pekerjaan"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00D33369" w:rsidRPr="00B82440" w:rsidRDefault="00D33369" w:rsidP="00D33369">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="709"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>A l a</w:t>
     </w:r>
     <w:r w:rsidR="00DE31CC">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> m a t</w:t>
     </w:r>
     <w:r w:rsidR="00DE31CC">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidR="00DE31CC">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="alamat"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00D33369" w:rsidRPr="00B82440" w:rsidRDefault="00D33369" w:rsidP="00D33369">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="709"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>Nama Usaha</w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="nama_usaha"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00594A56" w:rsidRDefault="00D33369" w:rsidP="00594A56">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="709"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>Nomor KTP</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="no_ktp"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00594A56" w:rsidRPr="00351526" w:rsidRDefault="00594A56" w:rsidP="00594A56">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="709"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="16"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00D33369" w:rsidRPr="00B82440" w:rsidRDefault="00D33369" w:rsidP="00D33369">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3544"/>
       <w:tab w:val="left" w:pos="3686"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:firstLine="709"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>Yang</w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>tersebut Namanya</w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>di atas</w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>bena</w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>r</w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve">mempunyai Usaha </w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>di bid</w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>ang</w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="bidang_usaha"/></w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>yang</w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> berdiri</w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve">Sejak Tahun </w:t>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="tahun_berdiri"/></w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="00510D17">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve">berlokasi </w:t>
     </w:r>
     <w:r w:rsidRPr="00C95F99">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>di</w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="lokasi"/></w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>Dusun/Dukuh/Kampung</w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t></w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="00686321">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="lingkungan"/></w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve">Kelurahan </w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>B</w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve">abakan </w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>Kecamatan</w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve"> Legok</w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve"> Kabupaten </w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>Tangerang</w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t xml:space="preserve"> Provinsi </w:t>
     </w:r>
     <w:r w:rsidR="00FD4D4A">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>Banten</w:t>
     </w:r>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
      </w:rPr>
      <w:t>.</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00D33369" w:rsidRPr="00714D95" w:rsidRDefault="00D33369" w:rsidP="00D33369">
     <w:pPr>
      <w:pStyle w:val="BodyText"/>
      <w:spacing w:line="480" w:lineRule="auto"/>
      <w:ind w:firstLine="624"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="4"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00B82440">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="24"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve">Demikian Surat Keterangan ini kami buat untuk dipergunakan sebagai mana mestinya </w:t>
     </w:r>
    </w:p>
    <w:tbl>
     <w:tblPr>
      <w:tblW w:w="0" w:type="auto"/>
      <w:tblLook w:val="01E0"/>
     </w:tblPr>
     <w:tblGrid>
      <w:gridCol w:w="4864"/>
      <w:gridCol w:w="4566"/>
     </w:tblGrid>
     <w:tr w:rsidR="00A155E8" w:rsidRPr="00B82440" w:rsidTr="00510D17">
      <w:trPr>
       <w:trHeight w:val="1811"/>
      </w:trPr>
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="4864" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00A155E8" w:rsidRPr="00B82440" w:rsidRDefault="00A155E8" w:rsidP="00626583">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00A155E8" w:rsidRDefault="00A155E8" w:rsidP="00626583">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00510D17" w:rsidRDefault="00510D17" w:rsidP="00626583">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00510D17" w:rsidRPr="00B82440" w:rsidRDefault="00510D17" w:rsidP="00626583">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00510D17" w:rsidRDefault="00A155E8" w:rsidP="00626583">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:tabs>
          <w:tab w:val="left" w:pos="2160"/>
          <w:tab w:val="center" w:pos="2283"/>
         </w:tabs>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:jc w:val="left"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
         <w:tab/>
        </w:r>
       </w:p>
       <w:p w:rsidR="00A155E8" w:rsidRPr="00B82440" w:rsidRDefault="00A155E8" w:rsidP="00626583">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:tabs>
          <w:tab w:val="left" w:pos="2160"/>
          <w:tab w:val="center" w:pos="2283"/>
         </w:tabs>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:jc w:val="left"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
         <w:tab/>
        </w:r>
       </w:p>
       <w:p w:rsidR="00A155E8" w:rsidRDefault="00A155E8" w:rsidP="00626583">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="2"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00510D17" w:rsidRPr="00B82440" w:rsidRDefault="00510D17" w:rsidP="00510D17">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
        <w:r w:rsidRPr="00B82440">
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
         <w:t>Catatan;</w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00A155E8" w:rsidRPr="0011740B" w:rsidRDefault="00510D17" w:rsidP="00686321">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="1340"/>
         </w:tabs>
         <w:rPr>
          <w:sz w:val="6"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
         <w:t>1. Berlaku</w:t>
        </w:r>
        <w:bookmarkStart w:id="0" w:name="_GoBack"/>
        <w:bookmarkEnd w:id="0"/>
        <w:r w:rsidR="00686321">
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
         <w:t xml:space="preserve"> <xsl:value-of select="berlaku_sampai"/></w:t>
        </w:r>
       </w:p>
      </w:tc>
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="4566" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00A155E8" w:rsidRDefault="00686321" w:rsidP="00510D17">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:tabs>
          <w:tab w:val="left" w:pos="948"/>
         </w:tabs>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
         <w:t><xsl:value-of select="nama_kel"/></w:t>
        </w:r>
        <w:r w:rsidR="00A155E8" w:rsidRPr="00A950C0">
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:szCs w:val="22"/>
         </w:rPr>
         <w:t>,</w:t>
        </w:r>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
         <w:t><xsl:value-of select="tanggal_surat"/></w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00510D17" w:rsidRPr="00507DAF" w:rsidRDefault="00510D17" w:rsidP="00510D17">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:tabs>
          <w:tab w:val="left" w:pos="948"/>
         </w:tabs>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00A155E8" w:rsidRPr="00A950C0" w:rsidRDefault="00686321" w:rsidP="00510D17">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:tabs>
          <w:tab w:val="left" w:pos="1167"/>
         </w:tabs>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
         <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00A155E8" w:rsidRPr="00A950C0" w:rsidRDefault="00A155E8" w:rsidP="00510D17">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:tabs>
          <w:tab w:val="left" w:pos="840"/>
         </w:tabs>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:color w:val="FFFFFF"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00A155E8" w:rsidRDefault="00A155E8" w:rsidP="00510D17">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="12"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00EE01DA" w:rsidRDefault="00EE01DA" w:rsidP="00510D17">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="12"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00EE01DA" w:rsidRPr="002952C1" w:rsidRDefault="00EE01DA" w:rsidP="00510D17">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="12"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00A155E8" w:rsidRPr="00AC6BDC" w:rsidRDefault="00A155E8" w:rsidP="00510D17">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="2"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00A155E8" w:rsidRPr="00A950C0" w:rsidRDefault="00A155E8" w:rsidP="00510D17">
        <w:pPr>
         <w:pStyle w:val="BodyText"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="16"/>
          <w:szCs w:val="22"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00594A56" w:rsidRDefault="00686321" w:rsidP="00510D17">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3261"/>
          <w:tab w:val="left" w:pos="3544"/>
         </w:tabs>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
         <w:t><xsl:value-of select="ttd_nama"/></w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00A155E8" w:rsidRPr="00594A56" w:rsidRDefault="00A155E8" w:rsidP="00510D17">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="948"/>
          <w:tab w:val="left" w:pos="3261"/>
          <w:tab w:val="left" w:pos="3544"/>
         </w:tabs>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
        <w:r w:rsidRPr="00A950C0">
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:szCs w:val="22"/>
         </w:rPr>
         <w:t>NIP</w:t>
        </w:r>
        <w:r w:rsidRPr="00A950C0">
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:szCs w:val="22"/>
         </w:rPr>
         <w:t>.</w:t>
        </w:r>
        <w:r w:rsidR="00686321">
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:szCs w:val="22"/>
         </w:rPr>
         <w:t><xsl:value-of select="ttd_nip"/></w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00A155E8" w:rsidRPr="00507DAF" w:rsidRDefault="00A155E8" w:rsidP="00510D17">
        <w:pPr>
         <w:pStyle w:val="Heading1"/>
         <w:tabs>
          <w:tab w:val="left" w:pos="459"/>
          <w:tab w:val="left" w:pos="662"/>
          <w:tab w:val="left" w:pos="1090"/>
          <w:tab w:val="left" w:pos="1452"/>
         </w:tabs>
         <w:ind w:left="34" w:hanging="34"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="2"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
      </w:tc>
     </w:tr>
    </w:tbl>
    <w:p w:rsidR="009F2FAB" w:rsidRDefault="009F2FAB" w:rsidP="009F2FAB">
     <w:pPr>
      <w:rPr>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="009E69FF" w:rsidRDefault="009E69FF" w:rsidP="009F2FAB">
     <w:pPr>
      <w:rPr>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="009E69FF" w:rsidRDefault="009E69FF" w:rsidP="009F2FAB">
     <w:pPr>
      <w:rPr>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="009E69FF" w:rsidRDefault="009E69FF" w:rsidP="009F2FAB">
     <w:pPr>
      <w:rPr>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:sectPr w:rsidR="009E69FF" w:rsidSect="004E4BE6">
     <w:headerReference w:type="default" r:id="rId8"/>
     <w:pgSz w:w="12242" w:h="20163" w:code="5"/>
     <w:pgMar w:top="567" w:right="1610" w:bottom="539" w:left="1418" w:header="709" w:footer="709" w:gutter="0"/>
     <w:cols w:space="708"/>
     <w:docGrid w:linePitch="360"/>
    </w:sectPr>
    	</xsl:for-each>
   </w:body>
  </w:document>
 </xsl:template>
</xsl:stylesheet>
